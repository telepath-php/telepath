<?php

namespace Telepath;

use League\Container\Container;
use League\Container\Exception\NotFoundException;
use League\Container\ReflectionContainer;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Telepath\Cache\SimpleCacheBridge;
use Telepath\Conversations\Conversation;
use Telepath\Handlers\ConversationHandler;
use Telepath\Handlers\Handler;
use Telepath\Layers\Generated;
use Telepath\Telegram\Update;

class TelegramBot extends Generated
{

    const DEFAULT_API_SERVER_URL = 'https://api.telegram.org';

    public ?string $username = null;

    public readonly Container $container;

    /** @var array<int, array{ 0: string, 1: array }> */
    protected array $middleware = [];

    /** @var Handler[] */
    protected array $handlers = [];

    public function __construct(string $botToken, string $baseUri = null, ContainerInterface $container = null)
    {
        if ($baseUri === null) {
            $baseUri = self::DEFAULT_API_SERVER_URL;
        }

        parent::__construct($botToken, $baseUri);

        $this->container = new Container();

        if ($container !== null) {
            $this->container->delegate($container);
        }

        $this->container->delegate(new ReflectionContainer());
        $this->container->addShared(TelegramBot::class, $this);
        $this->container->addShared(Update::class, fn() => new Update());
    }

    public function discoverPsr4(string $path): static
    {
        if (! is_dir($path)) {
            throw new \InvalidArgumentException('Path must be a directory');
        }

        $files = new \RegexIterator(
            new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path)),
            '/.*\.php/'
        );

        /** @var \SplFileInfo $file */
        foreach ($files as $file) {

            $namespace = $this->getNamespace($file->getRealPath());
            $class = $namespace . '\\' . $file->getBasename('.php');

            foreach ((new \ReflectionClass($class))->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {

                $attributes = $method->getAttributes();

                foreach ($attributes as $attribute) {

                    if (! is_subclass_of($attribute->getName(), Handler::class)) {
                        continue;
                    }

                    $this->handlers[] = $attribute->newInstance()
                        ->assign($class, $method->getName());

                }

            }

        }

        if (count($this->handlers) === 0) {
            $this->log()?->warning("No handlers found in path: {$path}");
        }

        return $this;
    }

    public function log(): ?LoggerInterface
    {
        try {
            return $this->container->get(LoggerInterface::class);
        } catch (ContainerExceptionInterface) {
            return null;
        }
    }

    public function enableLogging(LoggerInterface $logger): static
    {
        try {
            $this->container->extend(LoggerInterface::class)->setConcrete($logger);
        } catch (NotFoundException) {
            $this->container->addShared(LoggerInterface::class, $logger);
        }

        return $this;
    }

    public function cache(): ?CacheInterface
    {
        try {
            return $this->container->get(CacheInterface::class);
        } catch (ContainerExceptionInterface) {
            return null;
        }
    }

    public function enableCaching(CacheInterface|CacheItemPoolInterface $cache): static
    {
        if ($cache instanceof CacheItemPoolInterface) {
            $cache = new SimpleCacheBridge($cache);
        }

        try {
            $this->container->extend(CacheInterface::class)->setConcrete($cache);
        } catch (NotFoundException) {
            $this->container->addShared(CacheInterface::class, $cache);
        }

        return $this;
    }

    public function handleWebhook(): bool
    {
        $this->identifyUsername();

        $input = file_get_contents('php://input');

        if (empty($input)) {
            return false;
        }

        $json = json_decode($input, true);

        if ($json === null) {
            return false;
        }

        $update = new Update($json);

        $this->processUpdate($update);

        return true;
    }

    public function handlePolling(?array $allowedUpdates = null): never
    {
        $this->identifyUsername();

        $offset = 0;
        while (true) {

            $updates = $this->getUpdates(offset: $offset, timeout: 60, allowed_updates: $allowedUpdates);

            foreach ($updates as $update) {

                $offset = max($offset, $update->update_id + 1);
                $this->processUpdate($update);

            }

        }
    }

    public function middleware(string $middleware, ...$config): static
    {
        $this->middleware = array_merge($this->middleware, [$middleware, $config]);

        return $this;
    }

    /**
     * @return array<int, array{ 0: string, 1: array }>
     */
    public function getMiddleware(): array
    {
        return $this->middleware;
    }

    protected function identifyUsername()
    {
        if ($this->username !== null) {
            return;
        }

        $me = $this->getMe();
        $this->username = $me->username;
    }

    protected function getAvailableConversationHandler(Update $update): ?ConversationHandler
    {
        if (! $this->cache()) {
            return null;
        }

        $cache = $this->cache();
        $conversation = $cache->get(Conversation::cacheKey($update));

        if ($conversation === null) {
            // No Conversation available
            return null;
        }

        // Inject TelegramBot instance since we removed it before serialization
        $botProperty = (new \ReflectionClass($conversation))->getProperty('bot');
        $botProperty->setValue($conversation, $this);

        // Extract information about the next class and method to call, since we might create a new class
        $nextProperty = (new \ReflectionClass(Conversation::class))->getProperty('next');
        [$class, $method] = $nextProperty->getValue($conversation);

        if ($class !== get_class($conversation)) {
            $conversation = $this->container->get($class);
        }

        return (new ConversationHandler())
            ->assign($conversation, $method);
    }

    protected function processUpdate(Update $update): mixed
    {
        $this->container->extend(Update::class)->setConcrete($update);

        $responsibleHandlers = [];

        $conversationHandler = $this->getAvailableConversationHandler($update);
        if ($conversationHandler) {
            $responsibleHandlers[] = $conversationHandler;
        }

        $responsibleHandlers = array_merge(
            $responsibleHandlers,
            array_filter($this->handlers, fn(Handler $handler) => $handler->responsible($this, $update))
        );

        if (count($responsibleHandlers) === 0) {
            return null;
        }

        // TODO: Sort handlers by priority

        $handler = reset($responsibleHandlers);
        return $handler->dispatch($this, $update);
    }

    private function getNamespace(string $file): ?string
    {
        $tokens = token_get_all(file_get_contents($file));

        $namespace = '';
        $namespaceKeyword = false;
        foreach ($tokens as $token) {
            if (is_array($token) && $token[0] === T_NAMESPACE) {
                $namespaceKeyword = true;
            } elseif ($namespaceKeyword && ! is_array($token) && $token === ';') {
                break;
            } elseif ($namespaceKeyword) {
                $namespace .= is_array($token) ? $token[1] : $token;
            }
        }

        $namespace = trim($namespace);

        return $namespace ?: null;
    }

}

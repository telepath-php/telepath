<?php

namespace Tii\Telepath;

use League\Container\Container;
use League\Container\ReflectionContainer;
use Tii\Telepath\Cache\UsesCache;
use Tii\Telepath\Conversations\Conversation;
use Tii\Telepath\Handlers\Handler;
use Tii\Telepath\Layer\Generated;
use Tii\Telepath\Middleware\Attributes\Middleware as MiddlewareAttribute;
use Tii\Telepath\Middleware\Middleware;
use Tii\Telepath\Middleware\Pipeline;
use Tii\Telepath\Telegram\Update;

class TelegramBot extends Generated
{
    use UsesCache;

    protected static array $globalMiddleware = [];

    public readonly Container $container;
    protected ?Update $latestUpdate;

    protected array $middleware = [];
    protected array $handlers = [];

    public function __construct(string $botToken, string $baseUri = 'https://api.telegram.org')
    {
        parent::__construct($botToken, $baseUri);

        $this->container = new Container();
        $this->container->delegate(new ReflectionContainer());
        $this->container->addShared(TelegramBot::class, $this);
    }

    public static function globalMiddleware(array|Middleware|string $middleware)
    {
        if (! is_array($middleware)) {
            $middleware = [$middleware];
        }

        static::$globalMiddleware = array_merge(static::$globalMiddleware, $middleware);
    }

    public function latestUpdate(): ?Update
    {
        return $this->latestUpdate;
    }

    public function discoverPsr4(string $path): static
    {
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

                    $this->handlers[] = [
                        'handler' => $attribute->newInstance(),
                        'class'   => $class,
                        'method'  => $method->getName(),
                    ];

                }

            }

        }

        return $this;
    }

    public function handleWebhook(): bool
    {
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

    public function handlePolling(): never
    {
        $offset = 0;
        while (true) {

            $updates = $this->getUpdates(timeout: 60, offset: $offset);

            foreach ($updates as $update) {

                if (function_exists('ray')) {
                    ray($update);
                }

                $offset = max($offset, $update->update_id + 1);
                $this->processUpdate($update);

            }

        }
    }

    public function middleware(array|Middleware|string $middleware): static
    {
        if (! is_array($middleware)) {
            $middleware = [$middleware];
        }

        $this->middleware = array_merge($this->middleware, $middleware);

        return $this;
    }

    protected function processUpdate(Update $update)
    {
        $this->latestUpdate = $update;

        $conversation = $this->cache->get(Conversation::conversationKey($update));
        if ($conversation !== null) {
            return $conversation($update);
        }

        /**
         * @var Handler $handler
         * @var string $class
         * @var string $method
         */
        foreach ($this->handlers as ['handler' => $handler, 'class' => $class, 'method' => $method]) {

            if ($handler->responsible($update, $this)) {

                // Find Middleware attributes on class
                $classReflector = new \ReflectionClass($class);
                $classMiddleware = $classReflector->getAttributes(MiddlewareAttribute::class);
                $classMiddleware = array_map(fn(\ReflectionAttribute $attribute) => $attribute->newInstance()->middleware, $classMiddleware);

                // Find Middleware attributes on method
                $methodReflector = new \ReflectionMethod($class, $method);
                $methodMiddleware = $methodReflector->getAttributes(MiddlewareAttribute::class);
                $methodMiddleware = array_map(fn(\ReflectionAttribute $attribute) => $attribute->newInstance()->middleware, $methodMiddleware);

                $middleware = array_merge(static::$globalMiddleware, $this->middleware, $classMiddleware, $methodMiddleware);
                $middleware = array_map(fn($middleware) => is_string($middleware) ? new $middleware() : $middleware, $middleware);

                (new Pipeline())
                    ->send($update, $this)
                    ->through($middleware)
                    ->then(function ($update) use ($class, $method) {
                        $instance = $this->container->get($class);
                        return $instance->$method($update);
//                        return $this->injectedMethodCall($class, $method, $update);
                    });

                break;
            }

        }
    }

//    public function injectedMethodCall($class, $method, ?Update $update = null)
//    {
//        if (is_string($class)) {
//            $class = $this->container->get($class);
//        }
//
//        $methodReflector = new \ReflectionMethod($class, $method);
//        $arguments = [];
//        foreach ($methodReflector->getParameters() as $parameter) {
//            $type = $parameter->getType();
//            if (! $type instanceof \ReflectionNamedType) {
//                throw new \TypeError("$class::$method contains invalid type-hints.");
//            }
//
//            if ($type->getName() === Update::class) {
//                $arguments[] = $update;
//                continue;
//            }
//
//            $arguments[] = $this->container->get($type->getName());
//        }
//
//        return $class->$method(...$arguments);
//    }

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

<?php

namespace Tii\Telepath;

use Symfony\Component\Finder\Finder;
use Tii\Telepath\Handler\Handler;
use Tii\Telepath\Layer\Generated;
use Tii\Telepath\Telegram\Update;

class TelegramBot extends Generated
{

    protected array $handlers = [];

    public function discoverPsr4(string $path)
    {
        $files = new \RegexIterator(
            new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path)),
            '/.*\.php/'
        );

        /** @var \SplFileInfo $file */
        foreach ($files as $file) {

            // For Debugging
            include_once $file->getRealPath();

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

        ray(var_export($this->handlers, true));
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

                $offset = max($offset, $update->update_id + 1);
                $this->processUpdate($update);

            }

        }
    }

    protected function processUpdate(Update $update)
    {
        /**
         * @var Handler $handler
         * @var string $class
         * @var string $method
         */
        foreach ($this->handlers as ['handler' => $handler, 'class' => $class, 'method' => $method]) {

            if ($handler->responsible($update, $this)) {
                $instance = new $class;
                $instance->$method($update, $this);
                break;
            }

        }
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
<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Middleware\Attributes\Middleware;
use Tii\Telepath\Middleware\Pipeline;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Handler
{

    private $class;

    private string $method;

    public static function __set_state(array $an_array): object
    {
        return new static(...$an_array);
    }

    abstract public function responsible(Update $update): bool;

    public function assign($class, string $method): static
    {
        $this->class = $class;
        $this->method = $method;

        return $this;
    }

    /**
     * @return Middleware[]
     * @throws \ReflectionException
     */
    public function middleware(): array
    {
        if (! $this->class || ! $this->method) {
            throw new \LogicException('Cannot identify middleware without class/method. Call assign() first.');
        }

        $classReflector = new \ReflectionClass($this->class);
        $classMiddleware = array_map(
            fn(\ReflectionAttribute $attribute) => $attribute->newInstance()->middleware,
            $classReflector->getAttributes(Middleware::class)
        );

        $methodReflector = new \ReflectionMethod($this->class, $this->method);
        $methodMiddleware = array_map(
            fn(\ReflectionAttribute $attribute) => $attribute->newInstance()->middleware,
            $methodReflector->getAttributes(Middleware::class)
        );

        return array_merge($classMiddleware, $methodMiddleware);
    }

    public function dispatch(TelegramBot $bot, Update $update): mixed
    {
        $instance = is_string($this->class)
            ? $bot->container->get($this->class)
            : $this->class;

        $middleware = array_merge($bot->getMiddleware(), $this->middleware());
        $middleware = array_map(
            fn($middleware) => is_string($middleware)
                ? $bot->container->get($middleware)
                : $middleware,
            $middleware
        );

        return (new Pipeline())
            ->send($update)
            ->through($middleware)
            ->then(function ($update) use ($instance) {
                return $instance->{$this->method}($update);
            });
    }

}
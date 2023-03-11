<?php

namespace Telepath\Handlers;

use LogicException;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use Telepath\Middleware\Attributes\Middleware;
use Telepath\Middleware\Pipeline;
use Telepath\Telegram\Update;
use Telepath\Bot;

abstract class Handler
{

    private $class;

    private string $method;

    public static function __set_state(array $an_array): object
    {
        return new static(...$an_array);
    }

    abstract public function responsible(Bot $bot, Update $update): bool;

    public function assign($class, string $method): static
    {
        $this->class = $class;
        $this->method = $method;

        return $this;
    }

    /**
     * @return array{ 0: string, 1: array }
     * @throws ReflectionException
     */
    public function middleware(): array
    {
        if (! $this->class || ! $this->method) {
            throw new LogicException('Cannot identify middleware without class/method. Call assign() first.');
        }

        $classReflector = new ReflectionClass($this->class);
        $classMiddleware = array_map(
            fn(ReflectionAttribute $attribute) => $attribute->newInstance(),
            $classReflector->getAttributes(Middleware::class)
        );
        $classMiddleware = array_map(
            fn(Middleware $instance) => [$instance->middleware, $instance->config],
            $classMiddleware
        );

        $methodReflector = new ReflectionMethod($this->class, $this->method);
        $methodMiddleware = array_map(
            fn(ReflectionAttribute $attribute) => $attribute->newInstance(),
            $methodReflector->getAttributes(Middleware::class)
        );
        $methodMiddleware = array_map(
            fn(Middleware $instance) => [$instance->middleware, $instance->config],
            $methodMiddleware
        );

        return array_merge($classMiddleware, $methodMiddleware);
    }

    public function dispatch(Bot $bot, Update $update): mixed
    {
        $instance = is_string($this->class)
            ? $bot->container->get($this->class)
            : $this->class;

        $middleware = array_merge($bot->getMiddleware(), $this->middleware());
        $middleware = array_map(
            fn($container) => [$bot->container->get($container[0]), $container[1]],
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
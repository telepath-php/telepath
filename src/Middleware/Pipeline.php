<?php

namespace Telepath\Middleware;

use Telepath\Telegram\Update;

class Pipeline
{

    protected Update $update;

    /** @var array<int, array{ 0: Middleware, 1: array }> */
    protected array $pipes = [];

    public function send(Update $update): static
    {
        $this->update = $update;

        return $this;
    }

    /**
     * @param  array<int, array{ 0: Middleware, 1: array }>  $middleware
     * @return $this
     */
    public function through(array $middleware): static
    {
        $this->pipes = $middleware;

        return $this;
    }

    /**
     * @param  array{ 0: Middleware, 1: array }  $middleware
     * @return $this
     */
    public function pipe(array $middleware): static
    {
        array_push($this->pipes, ...$middleware);

        return $this;
    }

    public function then(\Closure $handler)
    {
        $pipes = array_reverse($this->pipes);

        $pipeline = array_reduce($pipes, function ($nextPipe, array $container) {
            /** @var array{ 0: Middleware, 1: array } $container */
            [$middleware, $config] = $container;

            return function ($update) use ($middleware, $config, $nextPipe) {
                return $middleware->handle($update, $nextPipe, $config);
            };
        }, $handler);

        return $pipeline($this->update);
    }

}
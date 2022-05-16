<?php

namespace Tii\Telepath\Middleware;

use Tii\Telepath\Telegram\Update;

class Pipeline
{

    protected Update $update;

    protected array $pipes = [];

    public function send(Update $update): static
    {
        $this->update = $update;

        return $this;
    }

    /**
     * @param  Middleware|Middleware[]  $middleware
     * @return void
     */
    public function through(Middleware|array $middleware): static
    {
        $this->pipes = is_array($middleware) ? $middleware : [$middleware];

        return $this;
    }

    /**
     * @param  Middleware|Middleware[]  $middleware
     * @return $this
     */
    public function pipe(Middleware|array $middleware): static
    {
        array_push($this->pipes, ...(is_array($middleware) ? $middleware : [$middleware]));

        return $this;
    }

    public function then(\Closure $handler)
    {
        $pipes = array_reverse($this->pipes);

        $pipeline = array_reduce($pipes, function ($nextPipe, Middleware $middleware) {
            return function ($update) use ($middleware, $nextPipe) {
                return $middleware->handle($update, $nextPipe);
            };
        }, $handler);

        return $pipeline($this->update);
    }

}
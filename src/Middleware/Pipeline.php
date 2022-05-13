<?php

namespace Tii\Telepath\Middleware;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

class Pipeline
{

    protected Update $update;

    protected TelegramBot $bot;

    protected array $pipes = [];

    public function send(Update $update, TelegramBot $bot): static
    {
        $this->update = $update;
        $this->bot = $bot;

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
        $core = function ($update) use ($handler) {
            return $handler($update, $this->bot);
        };

        $pipes = array_reverse($this->pipes);

        $pipeline = array_reduce($pipes, function ($nextPipe, Middleware $middleware) {
            return function ($update) use ($middleware, $nextPipe) {
                return $middleware->handle($update, $this->bot, $nextPipe);
            };
        }, $core);

        return $pipeline($this->update);
    }

}
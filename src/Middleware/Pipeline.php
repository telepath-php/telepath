<?php

namespace Tii\Telepath\Middleware;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

class Pipeline
{

    protected array $pipes = [];

    /**
     * @param  Middleware[]  $middlewares
     * @return void
     */
    public function middlewares(array $middlewares): static
    {
        $this->pipes = array_merge($this->pipes, $middlewares);

        return $this;
    }

    public function run(Update $update, TelegramBot $bot, \Closure $core)
    {
        $coreFunction = function ($update) use ($bot, $core) {
            return $core($update, $bot);
        };

        $pipes = array_reverse($this->pipes);

        $pipeline = array_reduce($pipes, function ($nextPipe, Middleware $middleware) use ($bot) {
            return function ($update) use ($middleware, $bot, $nextPipe) {
                return $middleware->handle($update, $bot, $nextPipe);
            };
        }, $coreFunction);

        return $pipeline($update);
    }

}
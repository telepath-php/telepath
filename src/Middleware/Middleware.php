<?php

namespace Tii\Telepath\Middleware;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Middleware
{

    abstract public function handle(Update $update, callable $next);

}

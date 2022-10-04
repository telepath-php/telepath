<?php

namespace Telepath\Middleware;

use Telepath\Telegram\Update;
use Telepath\TelegramBot;

abstract class Middleware
{

    abstract public function handle(Update $update, callable $next, array $config = []);

}

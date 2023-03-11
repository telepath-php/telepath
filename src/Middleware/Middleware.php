<?php

namespace Telepath\Middleware;

use Telepath\Telegram\Update;
use Telepath\Bot;

abstract class Middleware
{

    abstract public function handle(Update $update, callable $next, array $config = []);

}

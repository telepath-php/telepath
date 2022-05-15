<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Handler
{

    abstract public function responsible(Update $update): bool;

    public static function __set_state(array $an_array): object
    {
        return new static(...$an_array);
    }

}
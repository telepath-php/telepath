<?php

namespace Tii\Telepath\Handler;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Handler
{

    abstract public function responsible(Update $update, TelegramBot $bot): bool;

    public static function __set_state(array $an_array): object
    {
        return new static(...$an_array);
    }

}
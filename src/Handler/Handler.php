<?php

namespace Tii\Telepath\Handler;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Handler
{

    abstract public function responsible(Update $update, TelegramBot $bot): bool;

}
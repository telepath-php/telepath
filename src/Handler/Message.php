<?php

namespace Tii\Telepath\Handler;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Message extends Handler
{
    public function responsible(Update $update, TelegramBot $bot): bool
    {
        return $update->message !== null;
    }
}
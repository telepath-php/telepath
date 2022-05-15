<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Poll extends Handler
{
    public function responsible(Update $update): bool
    {
        return $update->poll !== null;
    }

}
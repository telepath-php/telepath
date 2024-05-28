<?php

namespace Telepath\Handlers\ChatBoost;

use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ChatBoost extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->chat_boost !== null;
    }
}

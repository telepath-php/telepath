<?php

namespace Telepath\Handlers\ChatMember;

use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ChatJoinRequest extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->chat_join_request !== null;
    }
}

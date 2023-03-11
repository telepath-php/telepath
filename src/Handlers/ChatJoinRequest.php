<?php

namespace Telepath\Handlers;

use Attribute;
use Telepath\Telegram\Update;
use Telepath\Bot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class ChatJoinRequest extends Handler
{

    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->chat_join_request !== null;
    }

}
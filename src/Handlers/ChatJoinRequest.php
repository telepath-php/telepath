<?php

namespace Telepath\Handlers;

use Attribute;
use Telepath\Telegram\Update;
use Telepath\TelegramBot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class ChatJoinRequest extends Handler
{

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        return $update->chat_join_request !== null;
    }

}
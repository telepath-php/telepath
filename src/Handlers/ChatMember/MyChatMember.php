<?php

namespace Telepath\Handlers\ChatMember;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class MyChatMember extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->my_chat_member !== null;
    }
}

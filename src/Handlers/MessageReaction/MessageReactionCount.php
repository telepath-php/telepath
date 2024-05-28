<?php

namespace Telepath\Handlers\MessageReaction;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class MessageReactionCount extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->message_reaction_count !== null;
    }
}

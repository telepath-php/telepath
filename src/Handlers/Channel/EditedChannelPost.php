<?php

namespace Telepath\Handlers;

use Attribute;
use Telepath\Bot;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class EditedChannelPost extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->edited_channel_post !== null;
    }
}

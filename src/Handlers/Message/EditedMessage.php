<?php

namespace Telepath\Handlers\Message;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class EditedMessage extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->edited_message !== null;
    }
}

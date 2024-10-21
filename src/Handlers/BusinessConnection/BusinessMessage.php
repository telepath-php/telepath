<?php

namespace Telepath\Handlers\BusinessConnection;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class BusinessMessage extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->business_message !== null;
    }
}
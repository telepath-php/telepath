<?php

namespace Telepath\Handlers\CallbackQuery;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class CallbackQuery extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->callback_query !== null;
    }
}

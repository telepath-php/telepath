<?php

namespace Telepath\Handlers\InlineQuery;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class ChosenInlineResult extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->chosen_inline_result !== null;
    }
}

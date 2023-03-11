<?php

namespace Telepath\Handlers;

use Attribute;
use Telepath\Telegram\Update;
use Telepath\Bot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class PollAnswer extends Handler
{

    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->poll_answer !== null;
    }

}
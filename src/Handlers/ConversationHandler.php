<?php

namespace Telepath\Handlers;

use LogicException;
use Telepath\Telegram\Update;
use Telepath\Bot;

class ConversationHandler extends Handler
{

    public function responsible(Bot $bot, Update $update): bool
    {
        throw new LogicException('ConversationHandler should not be used directly.');
    }

}
<?php

namespace Telepath\Handlers;

use LogicException;
use Telepath\Telegram\Update;
use Telepath\TelegramBot;

class ConversationHandler extends Handler
{

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        throw new LogicException('ConversationHandler should not be used directly.');
    }

}
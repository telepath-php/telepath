<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

class ConversationHandler extends Handler
{

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        throw new \LogicException('ConversationHandler should not be used directly.');
    }

}
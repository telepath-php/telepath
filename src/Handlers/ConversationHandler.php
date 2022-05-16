<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Telegram\Update;

class ConversationHandler extends Handler
{

    public function responsible(Update $update): bool
    {
        throw new \LogicException('ConversationHandler should not be used directly.');
    }

}
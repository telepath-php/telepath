<?php

namespace Tii\Telepath\Handlers;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class PreCheckoutQuery extends Handler
{

    public function responsible(Update $update, TelegramBot $bot): bool
    {
        return $update->pre_checkout_query !== null;
    }
}
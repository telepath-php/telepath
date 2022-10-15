<?php

namespace Telepath\Handlers;

use Attribute;
use Telepath\Telegram\Update;
use Telepath\TelegramBot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class CallbackQuery extends Handler
{

    public function __construct(
        int $priority = 1,
    ) {
        parent::__construct($priority);
    }

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        return $update->callback_query !== null;
    }

}
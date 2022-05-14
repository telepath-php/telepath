<?php

namespace Tii\Telepath\Handlers\CallbackQuery;

use Tii\Telepath\Handlers\CallbackQuery;
use Tii\Telepath\MatchMaker\MatchMaker;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class CallbackQueryData extends CallbackQuery
{

    public function __construct(
        protected ?string $exact = null,
        protected ?string $prefix = null,
        protected ?string $regex = null,
        protected ?string $suffix = null,
    ) {}

    public function responsible(Update $update, TelegramBot $bot): bool
    {
        if (! parent::responsible($update, $bot)) {
            return false;
        }

        $data = $update->callback_query->data;

        if ($data === null) {
            return false;
        }

        return MatchMaker::conjunction($data)
            ->exact($this->exact)
            ->prefix($this->prefix)
            ->regex($this->regex)
            ->suffix($this->suffix)
            ->result();
    }
}
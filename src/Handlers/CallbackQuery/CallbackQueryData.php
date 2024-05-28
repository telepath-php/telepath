<?php

namespace Telepath\Handlers\CallbackQuery;

use Attribute;
use Telepath\Bot;
use Telepath\MatchMaker\MatchMaker;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class CallbackQueryData extends CallbackQuery
{
    public function __construct(
        protected ?string $exact = null,
        protected ?string $prefix = null,
        protected ?string $regex = null,
        protected ?string $suffix = null,
    ) {
    }

    public function responsible(Bot $bot, Update $update): bool
    {
        if (! parent::responsible($bot, $update)) {
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

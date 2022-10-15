<?php

namespace Telepath\Handlers\Message;

use Attribute;
use Telepath\Handlers\Message;
use Telepath\MatchMaker\MatchMaker;
use Telepath\Telegram\Update;
use Telepath\TelegramBot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Text extends Message
{

    public function __construct(
        protected ?string $exact = null,
        protected ?string $prefix = null,
        protected ?string $regex = null,
        protected ?string $suffix = null,
        protected ?bool $is_numeric = null,
        int $priority = 3,
    ) {
        parent::__construct($priority);
    }

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        if (! parent::responsible($bot, $update)) {
            return false;
        }

        $text = $update->message->text;

        if ($text === null) {
            return false;
        }

        return MatchMaker::conjunction($text)
            ->exact($this->exact)
            ->prefix($this->prefix)
            ->regex($this->regex)
            ->suffix($this->suffix)
            ->is_numeric($this->is_numeric)
            ->result();
    }

}
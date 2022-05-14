<?php

namespace Tii\Telepath\Conversations;

use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Conversation
{

    protected ?string $next = null;

    public function __construct(
        protected TelegramBot $bot
    ) {}

    public static function conversationKey(Update $update)
    {
        return "telepath.conversation.{$update->user()->id}.{$update->chat()->id}";
    }

    public function next(string $method)
    {
        $cache = $this->bot->cache();
        $conversationKey = static::conversationKey($this->bot->latestUpdate());

        $this->next = $method;
        $cache->set($conversationKey, $this);
    }

    public function end()
    {
        $cache = $this->bot->cache();
        $conversationKey = static::conversationKey($this->bot->latestUpdate());

        $cache->delete($conversationKey);
    }

    public function __serialize(): array
    {
        $data = get_object_vars($this);
        unset($data['bot']);

        return $data;
    }

    public function __invoke(Update $update)
    {
        if ($this->next === null) {
            return null;
        }

        return $this->{$this->next}($update);
    }

}
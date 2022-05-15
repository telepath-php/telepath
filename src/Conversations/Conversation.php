<?php

namespace Tii\Telepath\Conversations;

use Psr\SimpleCache\CacheInterface;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

abstract class Conversation
{

    private ?string $next = null;

    public function __construct(
        public TelegramBot $bot
    ) {}

    public static function conversationKey(Update $update)
    {
        return "telepath.conversation.{$update->user()->id}.{$update->chat()->id}";
    }

    public function next(?string $method)
    {
        if ($method === null) {
            return $this->next;
        }

        $cache = $this->bot->container->get(CacheInterface::class);
        $update = $this->bot->container->get(Update::class);
        $conversationKey = static::conversationKey($update);

        $this->next = $method;
        $cache->set($conversationKey, $this);
    }

    public function end()
    {
        $cache = $this->bot->container->get(CacheInterface::class);
        $update = $this->bot->container->get(Update::class);
        $conversationKey = static::conversationKey($update);

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
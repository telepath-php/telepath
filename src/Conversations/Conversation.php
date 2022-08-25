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

    public function next(?string $method = null): static|string
    {
        if ($method === null) {
            return $this->next;
        }

        $cache = $this->bot->container->get(CacheInterface::class);
        $update = $this->bot->container->get(Update::class);
        $conversationKey = static::conversationKey($update);

        $this->next = $method;
        $cache->set($conversationKey, $this);

        return $this;
    }

    public function end(): static
    {
        $cache = $this->bot->container->get(CacheInterface::class);
        $update = $this->bot->container->get(Update::class);
        $conversationKey = static::conversationKey($update);

        $cache->delete($conversationKey);

        return $this;
    }

    public function __serialize(): array
    {
        $data = get_object_vars($this);
        unset($data['bot']);

        return $data;
    }

}
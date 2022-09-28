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
    ) {
        if (! $bot->container->has(CacheInterface::class)) {
            throw new \RuntimeException('Cannot use Conversations without Cache Layer.');
        }
    }

    public static function cacheKey(Update $update)
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
        $key = static::cacheKey($update);

        $this->next = $method;
        $cache->set($key, $this);

        return $this;
    }

    public function end(): static
    {
        $cache = $this->bot->container->get(CacheInterface::class);
        $update = $this->bot->container->get(Update::class);
        $key = static::cacheKey($update);

        $cache->delete($key);

        return $this;
    }

    public function __serialize(): array
    {
        $data = get_object_vars($this);
        unset($data['bot']);

        return $data;
    }

}
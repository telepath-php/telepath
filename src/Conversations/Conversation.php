<?php

namespace Telepath\Conversations;

use Telepath\Telegram\Update;
use Telepath\Bot;

abstract class Conversation
{

    private ?array $next = null;

    public function __construct(
        protected Bot $bot
    ) {
        if (! $bot->cache()) {
            throw new \RuntimeException('Cannot use Conversations without Cache Layer.');
        }
    }

    public static function cacheKey(Update $update)
    {
        return "telepath.conversation.{$update->user()->id}.{$update->chat()->id}";
    }

    public function next(string $method, ?string $class = null): static
    {
        $cache = $this->bot->cache();
        $update = $this->bot->container->get(Update::class);
        $key = static::cacheKey($update);

        $this->next = [
            $class ?? get_class($this),
            $method,
        ];

        $cache->set($key, $this);

        return $this;
    }

    public function end(): static
    {
        $cache = $this->bot->cache();
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
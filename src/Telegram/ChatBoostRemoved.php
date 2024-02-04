<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a boost removed from a chat.
 */
class ChatBoostRemoved extends Type
{
    /** Chat which was boosted */
    public Chat $chat;

    /** Unique identifier of the boost */
    public string $boost_id;

    /** Point in time (Unix timestamp) when the boost was removed */
    public int $remove_date;

    /** Source of the removed boost */
    public ChatBoostSource $source;

    /**
     * @param  Chat  $chat  Chat which was boosted
     * @param  string  $boost_id  Unique identifier of the boost
     * @param  int  $remove_date  Point in time (Unix timestamp) when the boost was removed
     * @param  ChatBoostSource  $source  Source of the removed boost
     */
    public static function make(Chat $chat, string $boost_id, int $remove_date, ChatBoostSource $source): static
    {
        return new static([
            'chat' => $chat,
            'boost_id' => $boost_id,
            'remove_date' => $remove_date,
            'source' => $source,
        ]);
    }
}

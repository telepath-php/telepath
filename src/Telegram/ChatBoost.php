<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a chat boost.
 */
class ChatBoost extends Type
{
    /** Unique identifier of the boost */
    public string $boost_id;

    /** Point in time (Unix timestamp) when the chat was boosted */
    public int $add_date;

    /** Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged */
    public int $expiration_date;

    /** Source of the added boost */
    public ChatBoostSource $source;

    /**
     * @param  string  $boost_id  Unique identifier of the boost
     * @param  int  $add_date  Point in time (Unix timestamp) when the chat was boosted
     * @param  int  $expiration_date  Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     * @param  ChatBoostSource  $source  Source of the added boost
     */
    public static function make(
        string $boost_id,
        int $add_date,
        int $expiration_date,
        ChatBoostSource $source,
    ): static {
        return new static([
            'boost_id' => $boost_id,
            'add_date' => $add_date,
            'expiration_date' => $expiration_date,
            'source' => $source,
        ]);
    }
}

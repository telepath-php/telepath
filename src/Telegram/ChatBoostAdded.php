<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a user boosting a chat.
 */
class ChatBoostAdded extends Type
{
    /** Number of boosts added by the user */
    public int $boost_count;

    /**
     * @param  int  $boost_count  Number of boosts added by the user
     */
    public static function make(int $boost_count): static
    {
        return new static([
            'boost_count' => $boost_count,
        ]);
    }
}

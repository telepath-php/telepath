<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
class UserChatBoosts extends Type
{
    /**
     * The list of boosts added to the chat by the user
     *
     * @var ChatBoost[]
     */
    public array $boosts;

    /**
     * @param  ChatBoost[]  $boosts  The list of boosts added to the chat by the user
     */
    public static function make(array $boosts): static
    {
        return new static([
            'boosts' => $boosts,
        ]);
    }
}

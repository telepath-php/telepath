<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
class ChatBoostSourceGiftCode extends ChatBoostSource
{
    /** Source of the boost, always “gift_code” */
    public string $source = 'gift_code';

    /**
     * @param  User  $user User for which the gift code was created
     */
    public static function make(User $user): static
    {
        return new static([
            'user' => $user,
        ]);
    }
}

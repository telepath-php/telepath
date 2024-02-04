<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
class ChatBoostSourcePremium extends ChatBoostSource
{
    /** Source of the boost, always “premium” */
    public string $source = 'premium';

    /**
     * @param  User  $user User that boosted the chat
     */
    public static function make(User $user): static
    {
        return new static([
            'user' => $user,
        ]);
    }
}

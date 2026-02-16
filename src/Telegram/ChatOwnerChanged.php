<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about an ownership change in the chat.
 */
class ChatOwnerChanged extends Type
{
    /** The new owner of the chat */
    public User $new_owner;

    /**
     * @param  User  $new_owner  The new owner of the chat
     */
    public static function make(User $new_owner): static
    {
        return new static([
            'new_owner' => $new_owner,
        ]);
    }
}

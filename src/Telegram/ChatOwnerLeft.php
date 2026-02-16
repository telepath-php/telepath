<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
class ChatOwnerLeft extends Type
{
    /** <em>Optional</em>. The user which will be the new owner of the chat if the previous owner does not return to the chat */
    public ?User $new_owner = null;

    /**
     * @param  User  $new_owner  <em>Optional</em>. The user which will be the new owner of the chat if the previous owner does not return to the chat
     */
    public static function make(?User $new_owner = null): static
    {
        return new static([
            'new_owner' => $new_owner,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember extends ChatMember
{
    /** The member's status in the chat, always “member” */
    public string $status = 'member';

    /** <em>Optional</em>. Date when the user's subscription will expire; Unix time */
    public ?int $until_date = null;

    /**
     * @param  User  $user  Information about the user
     * @param  int  $until_date  <em>Optional</em>. Date when the user's subscription will expire; Unix time
     */
    public static function make(User $user, ?int $until_date = null): static
    {
        return new static([
            'user' => $user,
            'until_date' => $until_date,
        ]);
    }
}

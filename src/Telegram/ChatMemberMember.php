<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember extends ChatMember
{
    /** The member's status in the chat, always “member” */
    public string $status = 'member';

    /**
     * @param User $user Information about the user
     */
    public static function make(User $user): static
    {
        return new static([
            'user' => $user,
        ]);
    }
}

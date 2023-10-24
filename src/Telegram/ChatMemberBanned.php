<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
class ChatMemberBanned extends ChatMember
{
    /** The member's status in the chat, always “kicked” */
    public string $status = 'kicked';

    /** Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever */
    public int $until_date;

    /**
     * @param  User  $user Information about the user
     * @param  int  $until_date Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
     */
    public static function make(User $user, int $until_date): static
    {
        return new static([
            'user' => $user,
            'until_date' => $until_date,
        ]);
    }
}

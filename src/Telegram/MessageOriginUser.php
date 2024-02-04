<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The message was originally sent by a known user.
 */
class MessageOriginUser extends MessageOrigin
{
    /** Type of the message origin, always “user” */
    public string $type = 'user';

    /** User that sent the message originally */
    public User $sender_user;

    /**
     * @param  int  $date Date the message was sent originally in Unix time
     * @param  User  $sender_user User that sent the message originally
     */
    public static function make(int $date, User $sender_user): static
    {
        return new static([
            'date' => $date,
            'sender_user' => $sender_user,
        ]);
    }
}

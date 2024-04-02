<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the connection of the bot with a business account.
 */
class BusinessConnection extends Type
{
    /** Unique identifier of the business connection */
    public string $id;

    /** Business account user that created the business connection */
    public User $user;

    /** Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $user_chat_id;

    /** Date the connection was established in Unix time */
    public int $date;

    /** True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours */
    public bool $can_reply;

    /** True, if the connection is active */
    public bool $is_enabled;

    /**
     * @param  string  $id  Unique identifier of the business connection
     * @param  User  $user  Business account user that created the business connection
     * @param  int  $user_chat_id  Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  int  $date  Date the connection was established in Unix time
     * @param  bool  $can_reply  True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours
     * @param  bool  $is_enabled  True, if the connection is active
     */
    public static function make(
        string $id,
        User $user,
        int $user_chat_id,
        int $date,
        bool $can_reply,
        bool $is_enabled,
    ): static {
        return new static([
            'id' => $id,
            'user' => $user,
            'user_chat_id' => $user_chat_id,
            'date' => $date,
            'can_reply' => $can_reply,
            'is_enabled' => $is_enabled,
        ]);
    }
}

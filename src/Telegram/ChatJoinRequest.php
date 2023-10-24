<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends Type
{
    /** Chat to which the request was sent */
    public Chat $chat;

    /** User that sent the join request */
    public User $from;

    /** Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user. */
    public int $user_chat_id;

    /** Date the request was sent in Unix time */
    public int $date;

    /** <em>Optional</em>. Bio of the user. */
    public ?string $bio = null;

    /** <em>Optional</em>. Chat invite link that was used by the user to send the join request */
    public ?ChatInviteLink $invite_link = null;

    /**
     * @param  Chat  $chat Chat to which the request was sent
     * @param  User  $from User that sent the join request
     * @param  int  $user_chat_id Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
     * @param  int  $date Date the request was sent in Unix time
     * @param  string  $bio <em>Optional</em>. Bio of the user.
     * @param  ChatInviteLink  $invite_link <em>Optional</em>. Chat invite link that was used by the user to send the join request
     */
    public static function make(
        Chat $chat,
        User $from,
        int $user_chat_id,
        int $date,
        string $bio = null,
        ChatInviteLink $invite_link = null,
    ): static {
        return new static([
            'chat' => $chat,
            'from' => $from,
            'user_chat_id' => $user_chat_id,
            'date' => $date,
            'bio' => $bio,
            'invite_link' => $invite_link,
        ]);
    }
}

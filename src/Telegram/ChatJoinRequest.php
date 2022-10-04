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

    /** Date the request was sent in Unix time */
    public int $date;

    /** Optional. Bio of the user. */
    public ?string $bio = null;

    /** Optional. Chat invite link that was used by the user to send the join request */
    public ?ChatInviteLink $invite_link = null;

    /**
     * @param Chat $chat Chat to which the request was sent
     * @param User $from User that sent the join request
     * @param int $date Date the request was sent in Unix time
     * @param string $bio Optional. Bio of the user.
     * @param ChatInviteLink $invite_link Optional. Chat invite link that was used by the user to send the join request
     */
    public static function make(
        Chat $chat,
        User $from,
        int $date,
        ?string $bio = null,
        ?ChatInviteLink $invite_link = null,
    ): static {
        return new static([
            'chat' => $chat,
            'from' => $from,
            'date' => $date,
            'bio' => $bio,
            'invite_link' => $invite_link,
        ]);
    }
}

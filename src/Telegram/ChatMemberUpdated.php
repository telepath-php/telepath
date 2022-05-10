<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends \Tii\Telepath\Type
{
    /** Chat the user belongs to */
    public Chat $chat;

    /** Performer of the action, which resulted in the change */
    public User $from;

    /** Date the change was done in Unix time */
    public int $date;

    /** Previous information about the chat member */
    public ChatMember $old_chat_member;

    /** New information about the chat member */
    public ChatMember $new_chat_member;

    /** Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only. */
    public ?ChatInviteLink $invite_link = null;

    /**
     * @param Chat $chat Chat the user belongs to
     * @param User $from Performer of the action, which resulted in the change
     * @param int $date Date the change was done in Unix time
     * @param ChatMember $old_chat_member Previous information about the chat member
     * @param ChatMember $new_chat_member New information about the chat member
     * @param ChatInviteLink $invite_link Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     */
    public static function make(
        Chat $chat,
        User $from,
        int $date,
        ChatMember $old_chat_member,
        ChatMember $new_chat_member,
        ?ChatInviteLink $invite_link = null
    ): static {
        return new static([
            'chat' => $chat,
            'from' => $from,
            'date' => $date,
            'old_chat_member' => $old_chat_member,
            'new_chat_member' => $new_chat_member,
            'invite_link' => $invite_link,
        ]);
    }
}

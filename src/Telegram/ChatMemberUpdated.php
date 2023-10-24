<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends Type
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

    /** <em>Optional</em>. Chat invite link, which was used by the user to join the chat; for joining by invite link events only. */
    public ?ChatInviteLink $invite_link = null;

    /** <em>Optional</em>. True, if the user joined the chat via a chat folder invite link */
    public ?bool $via_chat_folder_invite_link = null;

    /**
     * @param Chat $chat Chat the user belongs to
     * @param User $from Performer of the action, which resulted in the change
     * @param int $date Date the change was done in Unix time
     * @param ChatMember $old_chat_member Previous information about the chat member
     * @param ChatMember $new_chat_member New information about the chat member
     * @param ChatInviteLink $invite_link <em>Optional</em>. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @param bool $via_chat_folder_invite_link <em>Optional</em>. True, if the user joined the chat via a chat folder invite link
     */
    public static function make(
        Chat $chat,
        User $from,
        int $date,
        ChatMember $old_chat_member,
        ChatMember $new_chat_member,
        ?ChatInviteLink $invite_link = null,
        ?bool $via_chat_folder_invite_link = null,
    ): static
    {
        return new static([
            'chat' => $chat,
            'from' => $from,
            'date' => $date,
            'old_chat_member' => $old_chat_member,
            'new_chat_member' => $new_chat_member,
            'invite_link' => $invite_link,
            'via_chat_folder_invite_link' => $via_chat_folder_invite_link,
        ]);
    }
}

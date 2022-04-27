<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatMemberUpdated extends \Tii\Telepath\Type
{
    public readonly Chat $chat;

    public readonly User $from;

    public readonly int $date;

    public readonly ChatMember $old_chat_member;

    public readonly ChatMember $new_chat_member;

    public readonly ChatInviteLink $invite_link;
}


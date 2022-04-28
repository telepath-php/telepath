<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class ChatMemberUpdated extends \Tii\Telepath\Type
{
	public Chat $chat;
	public User $from;
	public int $date;
	public ChatMember $old_chat_member;
	public ChatMember $new_chat_member;
	public ChatInviteLink $invite_link;
}

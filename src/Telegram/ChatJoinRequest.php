<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class ChatJoinRequest extends \Tii\Telepath\Type
{
	public Chat $chat;
	public User $from;
	public int $date;
	public string $bio;
	public ChatInviteLink $invite_link;
}

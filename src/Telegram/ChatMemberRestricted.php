<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class ChatMemberRestricted extends ChatMember
{
	public string $status;
	public User $user;
	public bool $is_member;
	public bool $can_change_info;
	public bool $can_invite_users;
	public bool $can_pin_messages;
	public bool $can_send_messages;
	public bool $can_send_media_messages;
	public bool $can_send_polls;
	public bool $can_send_other_messages;
	public bool $can_add_web_page_previews;
	public int $until_date;
}

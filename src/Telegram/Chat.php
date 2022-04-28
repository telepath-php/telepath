<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class Chat extends \Tii\Telepath\Type
{
	public int $id;
	public string $type;
	public string $title;
	public string $username;
	public string $first_name;
	public string $last_name;
	public ChatPhoto $photo;
	public string $bio;
	public bool $has_private_forwards;
	public string $description;
	public string $invite_link;
	public Message $pinned_message;
	public ChatPermissions $permissions;
	public int $slow_mode_delay;
	public int $message_auto_delete_time;
	public bool $has_protected_content;
	public string $sticker_set_name;
	public bool $can_set_sticker_set;
	public int $linked_chat_id;
	public ChatLocation $location;
}

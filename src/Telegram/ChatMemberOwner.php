<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends ChatMember
{
	/** True, if the user's presence in the chat is hidden */
	public bool $is_anonymous;

	/** Optional. Custom title for this user */
	public ?string $custom_title;
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
class ChatMemberLeft extends ChatMember
{
	/** The member's status in the chat, always “left” */
	public string $status = 'left';


	/**
	 * @param User $user Information about the user
	 */
	public static function make(User $user): static
	{
		return new static([
		    'user' => $user,
		]);
	}
}

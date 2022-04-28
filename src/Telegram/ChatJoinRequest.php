<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends \Tii\Telepath\Type
{
	/** Chat to which the request was sent */
	public Chat $chat;

	/** User that sent the join request */
	public User $from;

	/** Date the request was sent in Unix time */
	public int $date;

	/** Optional. Bio of the user. */
	public ?string $bio;

	/** Optional. Chat invite link that was used by the user to send the join request */
	public ?ChatInviteLink $invite_link;
}

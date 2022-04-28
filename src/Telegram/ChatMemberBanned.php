<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
class ChatMemberBanned extends ChatMember
{
	/** Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever */
	public int $until_date;
}

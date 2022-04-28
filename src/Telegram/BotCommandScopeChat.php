<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat extends BotCommandScope
{
	/** Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
	public int|string $chat_id;
}

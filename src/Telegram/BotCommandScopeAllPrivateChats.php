<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
	/** Scope type, must be all_private_chats */
	public string $type = 'all_private_chats';


	public static function make(): static
	{
		return new static([
		]);
	}
}

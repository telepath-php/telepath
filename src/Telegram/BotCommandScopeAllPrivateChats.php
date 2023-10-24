<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    /** Scope type, must be <em>all_private_chats</em> */
    public string $type = 'all_private_chats';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

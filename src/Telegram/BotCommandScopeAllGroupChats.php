<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats extends BotCommandScope
{
    /** Scope type, must be <em>all_group_chats</em> */
    public string $type = 'all_group_chats';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    /** Scope type, must be <em>all_chat_administrators</em> */
    public string $type = 'all_chat_administrators';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

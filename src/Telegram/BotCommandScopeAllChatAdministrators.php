<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    /** Scope type, must be all_chat_administrators */
    public string $type = 'all_chat_administrators';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

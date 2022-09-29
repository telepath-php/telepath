<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault extends BotCommandScope
{
    /** Scope type, must be default */
    public string $type = 'default';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

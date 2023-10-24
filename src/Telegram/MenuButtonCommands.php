<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands extends MenuButton
{
    /** Type of the button, must be <em>commands</em> */
    public string $type = 'commands';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

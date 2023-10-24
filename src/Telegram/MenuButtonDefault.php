<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes that no specific value for the menu button was set.
 */
class MenuButtonDefault extends MenuButton
{
    /** Type of the button, must be <em>default</em> */
    public string $type = 'default';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

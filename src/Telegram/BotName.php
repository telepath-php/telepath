<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents the bot's name.
 */
class BotName extends Type
{
    /** The bot's name */
    public string $name;

    /**
     * @param  string  $name The bot's name
     */
    public static function make(string $name): static
    {
        return new static([
            'name' => $name,
        ]);
    }
}

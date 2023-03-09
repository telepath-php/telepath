<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents the bot's description.
 */
class BotDescription extends Type
{
    /** The bot's description */
    public string $description;

    /**
     * @param string $description The bot's description
     */
    public static function make(string $description): static
    {
        return new static([
            'description' => $description,
        ]);
    }
}

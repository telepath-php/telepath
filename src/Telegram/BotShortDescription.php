<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents the bot's short description.
 */
class BotShortDescription extends Type
{
    /** The bot's short description */
    public string $short_description;

    /**
     * @param  string  $short_description The bot's short description
     */
    public static function make(string $short_description): static
    {
        return new static([
            'short_description' => $short_description,
        ]);
    }
}

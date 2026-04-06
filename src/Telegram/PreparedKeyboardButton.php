<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
class PreparedKeyboardButton extends Type
{
    /** Unique identifier of the keyboard button */
    public string $id;

    /**
     * @param  string  $id  Unique identifier of the keyboard button
     */
    public static function make(string $id): static
    {
        return new static([
            'id' => $id,
        ]);
    }
}

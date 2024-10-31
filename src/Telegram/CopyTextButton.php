<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
class CopyTextButton extends Type
{
    /** The text to be copied to the clipboard; 1-256 characters */
    public string $text;

    /**
     * @param  string  $text  The text to be copied to the clipboard; 1-256 characters
     */
    public static function make(string $text): static
    {
        return new static([
            'text' => $text,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes data sent from a Web App to the bot.
 */
class WebAppData extends Type
{
    /** The data. Be aware that a bad client can send arbitrary data in this field. */
    public string $data;

    /** Text of the <em>web_app</em> keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field. */
    public string $button_text;

    /**
     * @param string $data The data. Be aware that a bad client can send arbitrary data in this field.
     * @param string $button_text Text of the <em>web_app</em> keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     */
    public static function make(string $data, string $button_text): static
    {
        return new static([
            'data' => $data,
            'button_text' => $button_text,
        ]);
    }
}

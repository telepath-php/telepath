<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup extends Type
{
    /**
     * Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api#inlinekeyboardbutton">InlineKeyboardButton</a> objects
     *
     * @var InlineKeyboardButton[][]
     */
    public array $inline_keyboard;

    /**
     * @param  InlineKeyboardButton[][]  $inline_keyboard Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api#inlinekeyboardbutton">InlineKeyboardButton</a> objects
     */
    public static function make(array $inline_keyboard): static
    {
        return new static([
            'inline_keyboard' => $inline_keyboard,
        ]);
    }
}

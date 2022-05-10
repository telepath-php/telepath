<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an animated emoji that displays a random value.
 */
class Dice extends \Tii\Telepath\Type
{
    /** Emoji on which the dice throw animation is based */
    public string $emoji;

    /** Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji */
    public int $value;

    /**
     * @param string $emoji Emoji on which the dice throw animation is based
     * @param int $value Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
     */
    public static function make(string $emoji, int $value): static
    {
        return new static([
            'emoji' => $emoji,
            'value' => $value,
        ]);
    }
}

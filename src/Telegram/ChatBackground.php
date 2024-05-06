<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a chat background.
 */
class ChatBackground extends Type
{
    /** Type of the background */
    public BackgroundType $type;

    /**
     * @param  BackgroundType  $type  Type of the background
     */
    public static function make(BackgroundType $type): static
    {
        return new static([
            'type' => $type,
        ]);
    }
}

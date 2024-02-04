<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends Type
{
    /** Video chat duration in seconds */
    public int $duration;

    /**
     * @param  int  $duration  Video chat duration in seconds
     */
    public static function make(int $duration): static
    {
        return new static([
            'duration' => $duration,
        ]);
    }
}

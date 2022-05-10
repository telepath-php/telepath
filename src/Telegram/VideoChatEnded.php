<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends \Tii\Telepath\Type
{
    /** Video chat duration in seconds */
    public int $duration;

    /**
     * @param int $duration Video chat duration in seconds
     */
    public static function make(int $duration): static
    {
        return new static([
            'duration' => $duration,
        ]);
    }
}

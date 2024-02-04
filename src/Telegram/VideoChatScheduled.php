<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
class VideoChatScheduled extends Type
{
    /** Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator */
    public int $start_date;

    /**
     * @param  int  $start_date  Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
     */
    public static function make(int $start_date): static
    {
        return new static([
            'start_date' => $start_date,
        ]);
    }
}

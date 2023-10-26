<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged extends Type
{
    /** New auto-delete time for messages in the chat; in seconds */
    public int $message_auto_delete_time;

    /**
     * @param int $message_auto_delete_time New auto-delete time for messages in the chat; in seconds
     */
    public static function make(int $message_auto_delete_time): static
    {
        return new static([
            'message_auto_delete_time' => $message_auto_delete_time,
        ]);
    }
}

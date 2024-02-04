<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a unique message identifier.
 */
class MessageId extends Type
{
    /** Unique message identifier */
    public int $message_id;

    /**
     * @param  int  $message_id  Unique message identifier
     */
    public static function make(int $message_id): static
    {
        return new static([
            'message_id' => $message_id,
        ]);
    }
}

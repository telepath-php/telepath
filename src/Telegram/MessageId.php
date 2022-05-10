<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a unique message identifier.
 */
class MessageId extends \Tii\Telepath\Types\Type
{
    /** Unique message identifier */
    public int $message_id;

    /**
     * @param int $message_id Unique message identifier
     */
    public static function make(int $message_id): static
    {
        return new static([
            'message_id' => $message_id,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes a message that can be inaccessible to the bot. It can be one of
 */
abstract class MaybeInaccessibleMessage extends Type implements Factory
{
    /** Unique message identifier inside this chat */
    public int $message_id;

    /** Date the message was sent in Unix time. It is always a positive number, representing a valid date. */
    public int $date;

    /** Chat the message belongs to */
    public Chat $chat;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['date']) {
            0 => new InaccessibleMessage($data, $bot),
            default => new Message($data, $bot),
        };
    }
}

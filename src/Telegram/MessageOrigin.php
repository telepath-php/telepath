<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the origin of a message. It can be one of
 */
abstract class MessageOrigin extends Type implements Factory
{
    /** Type of the message origin */
    public string $type;

    /** Date the message was sent originally in Unix time */
    public int $date;

    public static function factory(array $data, Bot $bot = null): self
    {
        return match ($data['type']) {
            'user' => new MessageOriginUser($data, $bot),
            'hidden_user' => new MessageOriginHiddenUser($data, $bot),
            'chat' => new MessageOriginChat($data, $bot),
            'channel' => new MessageOriginChannel($data, $bot),
        };
    }
}

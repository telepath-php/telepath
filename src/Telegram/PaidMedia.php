<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes paid media. Currently, it can be one of
 */
abstract class PaidMedia extends Type implements Factory
{
    /** Type of the paid media */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'preview' => new PaidMediaPreview($data, $bot),
            'photo' => new PaidMediaPhoto($data, $bot),
            'video' => new PaidMediaVideo($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the content of a story to post. Currently, it can be one of
 */
abstract class InputStoryContent extends Type implements Factory
{
    /** Type of the content */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'photo' => new InputStoryContentPhoto($data, $bot),
            'video' => new InputStoryContentVideo($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * Describes the type of a clickable area on a story. Currently, it can be one of
 */
abstract class StoryAreaType extends Type implements Factory
{
    /** Type of the area */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'location' => new StoryAreaTypeLocation($data, $bot),
            'suggested_reaction' => new StoryAreaTypeSuggestedReaction($data, $bot),
            'link' => new StoryAreaTypeLink($data, $bot),
            'weather' => new StoryAreaTypeWeather($data, $bot),
            'unique_gift' => new StoryAreaTypeUniqueGift($data, $bot),
        };
    }
}

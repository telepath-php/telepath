<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
class StoryAreaTypeUniqueGift extends StoryAreaType
{
    /** Type of the area, always “unique_gift” */
    public string $type = 'unique_gift';

    /** Unique name of the gift */
    public string $name;

    /**
     * @param  string  $name  Unique name of the gift
     */
    public static function make(string $name): static
    {
        return new static([
            'name' => $name,
        ]);
    }
}

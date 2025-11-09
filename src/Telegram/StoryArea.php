<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a clickable area on a story media.
 */
class StoryArea extends Type
{
    /** Position of the area */
    public StoryAreaPosition $position;

    /** Type of the area */
    public StoryAreaType $type;

    /**
     * @param  StoryAreaPosition  $position  Position of the area
     * @param  StoryAreaType  $type  Type of the area
     */
    public static function make(StoryAreaPosition $position, StoryAreaType $type): static
    {
        return new static([
            'position' => $position,
            'type' => $type,
        ]);
    }
}

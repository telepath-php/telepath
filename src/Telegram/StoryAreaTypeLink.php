<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
class StoryAreaTypeLink extends StoryAreaType
{
    /** Type of the area, always “link” */
    public string $type = 'link';

    /** HTTP or tg:// URL to be opened when the area is clicked */
    public string $url;

    /**
     * @param  string  $url  HTTP or tg:// URL to be opened when the area is clicked
     */
    public static function make(string $url): static
    {
        return new static([
            'url' => $url,
        ]);
    }
}

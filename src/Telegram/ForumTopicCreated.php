<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated extends Type
{
    /** Name of the topic */
    public string $name;

    /** Color of the topic icon in RGB format */
    public int $icon_color;

    /** <em>Optional</em>. Unique identifier of the custom emoji shown as the topic icon */
    public ?string $icon_custom_emoji_id = null;

    /**
     * @param  string  $name Name of the topic
     * @param  int  $icon_color Color of the topic icon in RGB format
     * @param  string  $icon_custom_emoji_id <em>Optional</em>. Unique identifier of the custom emoji shown as the topic icon
     */
    public static function make(string $name, int $icon_color, string $icon_custom_emoji_id = null): static
    {
        return new static([
            'name' => $name,
            'icon_color' => $icon_color,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
        ]);
    }
}

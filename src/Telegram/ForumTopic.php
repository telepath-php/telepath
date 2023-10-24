<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a forum topic.
 */
class ForumTopic extends Type
{
    /** Unique identifier of the forum topic */
    public int $message_thread_id;

    /** Name of the topic */
    public string $name;

    /** Color of the topic icon in RGB format */
    public int $icon_color;

    /** <em>Optional</em>. Unique identifier of the custom emoji shown as the topic icon */
    public ?string $icon_custom_emoji_id = null;

    /**
     * @param int $message_thread_id Unique identifier of the forum topic
     * @param string $name Name of the topic
     * @param int $icon_color Color of the topic icon in RGB format
     * @param string $icon_custom_emoji_id <em>Optional</em>. Unique identifier of the custom emoji shown as the topic icon
     */
    public static function make(
        int $message_thread_id,
        string $name,
        int $icon_color,
        ?string $icon_custom_emoji_id = null,
    ): static
    {
        return new static([
            'message_thread_id' => $message_thread_id,
            'name' => $name,
            'icon_color' => $icon_color,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
        ]);
    }
}

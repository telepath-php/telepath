<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about an edited forum topic.
 */
class ForumTopicEdited extends Type
{
    /** <em>Optional</em>. New name of the topic, if it was edited */
    public ?string $name = null;

    /** <em>Optional</em>. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed */
    public ?string $icon_custom_emoji_id = null;

    /**
     * @param string $name <em>Optional</em>. New name of the topic, if it was edited
     * @param string $icon_custom_emoji_id <em>Optional</em>. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     */
    public static function make(?string $name = null, ?string $icon_custom_emoji_id = null): static
    {
        return new static([
            'name' => $name,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
        ]);
    }
}

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

    /** <em>Optional</em>. <em>True</em>, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot */
    public ?bool $is_name_implicit = null;

    /**
     * @param  string  $name  Name of the topic
     * @param  int  $icon_color  Color of the topic icon in RGB format
     * @param  string  $icon_custom_emoji_id  <em>Optional</em>. Unique identifier of the custom emoji shown as the topic icon
     * @param  bool  $is_name_implicit  <em>Optional</em>. <em>True</em>, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
     */
    public static function make(
        string $name,
        int $icon_color,
        ?string $icon_custom_emoji_id = null,
        ?bool $is_name_implicit = null,
    ): static {
        return new static([
            'name' => $name,
            'icon_color' => $icon_color,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
            'is_name_implicit' => $is_name_implicit,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The reaction is based on a custom emoji.
 */
class ReactionTypeCustomEmoji extends ReactionType
{
    /** Type of the reaction, always “custom_emoji” */
    public string $type = 'custom_emoji';

    /** Custom emoji identifier */
    public string $custom_emoji_id;

    /**
     * @param  string  $custom_emoji_id  Custom emoji identifier
     */
    public static function make(string $custom_emoji_id): static
    {
        return new static([
            'custom_emoji_id' => $custom_emoji_id,
        ]);
    }
}

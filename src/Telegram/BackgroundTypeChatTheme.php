<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is taken directly from a built-in chat theme.
 */
class BackgroundTypeChatTheme extends BackgroundType
{
    /** Type of the background, always “chat_theme” */
    public string $type = 'chat_theme';

    /** Name of the chat theme, which is usually an emoji */
    public string $theme_name;

    /**
     * @param  string  $theme_name  Name of the chat theme, which is usually an emoji
     */
    public static function make(string $theme_name): static
    {
        return new static([
            'theme_name' => $theme_name,
        ]);
    }
}

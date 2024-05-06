<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the type of a background. Currently, it can be one of
 */
abstract class BackgroundType extends Type implements Factory
{
    /** Type of the background */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'fill' => new BackgroundTypeFill($data, $bot),
            'wallpaper' => new BackgroundTypeWallpaper($data, $bot),
            'pattern' => new BackgroundTypePattern($data, $bot),
            'chat_theme' => new BackgroundTypeChatTheme($data, $bot),
        };
    }
}

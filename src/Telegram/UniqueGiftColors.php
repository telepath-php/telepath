<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 */
class UniqueGiftColors extends Type
{
    /** Custom emoji identifier of the unique gift's model */
    public string $model_custom_emoji_id;

    /** Custom emoji identifier of the unique gift's symbol */
    public string $symbol_custom_emoji_id;

    /** Main color used in light themes; RGB format */
    public int $light_theme_main_color;

    /**
     * List of 1-3 additional colors used in light themes; RGB format
     *
     * @var int[]
     */
    public array $light_theme_other_colors;

    /** Main color used in dark themes; RGB format */
    public int $dark_theme_main_color;

    /**
     * List of 1-3 additional colors used in dark themes; RGB format
     *
     * @var int[]
     */
    public array $dark_theme_other_colors;

    /**
     * @param  string  $model_custom_emoji_id  Custom emoji identifier of the unique gift's model
     * @param  string  $symbol_custom_emoji_id  Custom emoji identifier of the unique gift's symbol
     * @param  int  $light_theme_main_color  Main color used in light themes; RGB format
     * @param  int[]  $light_theme_other_colors  List of 1-3 additional colors used in light themes; RGB format
     * @param  int  $dark_theme_main_color  Main color used in dark themes; RGB format
     * @param  int[]  $dark_theme_other_colors  List of 1-3 additional colors used in dark themes; RGB format
     */
    public static function make(
        string $model_custom_emoji_id,
        string $symbol_custom_emoji_id,
        int $light_theme_main_color,
        array $light_theme_other_colors,
        int $dark_theme_main_color,
        array $dark_theme_other_colors,
    ): static {
        return new static([
            'model_custom_emoji_id' => $model_custom_emoji_id,
            'symbol_custom_emoji_id' => $symbol_custom_emoji_id,
            'light_theme_main_color' => $light_theme_main_color,
            'light_theme_other_colors' => $light_theme_other_colors,
            'dark_theme_main_color' => $dark_theme_main_color,
            'dark_theme_other_colors' => $dark_theme_other_colors,
        ]);
    }
}

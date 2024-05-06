<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is automatically filled based on the selected colors.
 */
class BackgroundTypeFill extends BackgroundType
{
    /** Type of the background, always “fill” */
    public string $type = 'fill';

    /** The background fill */
    public BackgroundFill $fill;

    /** Dimming of the background in dark themes, as a percentage; 0-100 */
    public int $dark_theme_dimming;

    /**
     * @param  BackgroundFill  $fill  The background fill
     * @param  int  $dark_theme_dimming  Dimming of the background in dark themes, as a percentage; 0-100
     */
    public static function make(BackgroundFill $fill, int $dark_theme_dimming): static
    {
        return new static([
            'fill' => $fill,
            'dark_theme_dimming' => $dark_theme_dimming,
        ]);
    }
}

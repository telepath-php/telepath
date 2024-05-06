<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is filled using the selected color.
 */
class BackgroundFillSolid extends BackgroundFill
{
    /** Type of the background fill, always “solid” */
    public string $type = 'solid';

    /** The color of the background fill in the RGB24 format */
    public int $color;

    /**
     * @param  int  $color  The color of the background fill in the RGB24 format
     */
    public static function make(int $color): static
    {
        return new static([
            'color' => $color,
        ]);
    }
}

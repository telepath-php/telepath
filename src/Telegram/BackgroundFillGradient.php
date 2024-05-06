<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is a gradient fill.
 */
class BackgroundFillGradient extends BackgroundFill
{
    /** Type of the background fill, always “gradient” */
    public string $type = 'gradient';

    /** Top color of the gradient in the RGB24 format */
    public int $top_color;

    /** Bottom color of the gradient in the RGB24 format */
    public int $bottom_color;

    /** Clockwise rotation angle of the background fill in degrees; 0-359 */
    public int $rotation_angle;

    /**
     * @param  int  $top_color  Top color of the gradient in the RGB24 format
     * @param  int  $bottom_color  Bottom color of the gradient in the RGB24 format
     * @param  int  $rotation_angle  Clockwise rotation angle of the background fill in degrees; 0-359
     */
    public static function make(int $top_color, int $bottom_color, int $rotation_angle): static
    {
        return new static([
            'top_color' => $top_color,
            'bottom_color' => $bottom_color,
            'rotation_angle' => $rotation_angle,
        ]);
    }
}

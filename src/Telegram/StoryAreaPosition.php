<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the position of a clickable area within a story.
 */
class StoryAreaPosition extends Type
{
    /** The abscissa of the area's center, as a percentage of the media width */
    public float $x_percentage;

    /** The ordinate of the area's center, as a percentage of the media height */
    public float $y_percentage;

    /** The width of the area's rectangle, as a percentage of the media width */
    public float $width_percentage;

    /** The height of the area's rectangle, as a percentage of the media height */
    public float $height_percentage;

    /** The clockwise rotation angle of the rectangle, in degrees; 0-360 */
    public float $rotation_angle;

    /** The radius of the rectangle corner rounding, as a percentage of the media width */
    public float $corner_radius_percentage;

    /**
     * @param  float  $x_percentage  The abscissa of the area's center, as a percentage of the media width
     * @param  float  $y_percentage  The ordinate of the area's center, as a percentage of the media height
     * @param  float  $width_percentage  The width of the area's rectangle, as a percentage of the media width
     * @param  float  $height_percentage  The height of the area's rectangle, as a percentage of the media height
     * @param  float  $rotation_angle  The clockwise rotation angle of the rectangle, in degrees; 0-360
     * @param  float  $corner_radius_percentage  The radius of the rectangle corner rounding, as a percentage of the media width
     */
    public static function make(
        float $x_percentage,
        float $y_percentage,
        float $width_percentage,
        float $height_percentage,
        float $rotation_angle,
        float $corner_radius_percentage,
    ): static {
        return new static([
            'x_percentage' => $x_percentage,
            'y_percentage' => $y_percentage,
            'width_percentage' => $width_percentage,
            'height_percentage' => $height_percentage,
            'rotation_angle' => $rotation_angle,
            'corner_radius_percentage' => $corner_radius_percentage,
        ]);
    }
}

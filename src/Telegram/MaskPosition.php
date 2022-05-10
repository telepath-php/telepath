<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
class MaskPosition extends \Tii\Telepath\Type
{
    /** The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”. */
    public string $point;

    /** Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position. */
    public float $x_shift;

    /** Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position. */
    public float $y_shift;

    /** Mask scaling coefficient. For example, 2.0 means double size. */
    public float $scale;

    /**
     * @param string $point The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     * @param float $x_shift Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     * @param float $y_shift Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     * @param float $scale Mask scaling coefficient. For example, 2.0 means double size.
     */
    public static function make(string $point, float $x_shift, float $y_shift, float $scale): static
    {
        return new static([
            'point' => $point,
            'x_shift' => $x_shift,
            'y_shift' => $y_shift,
            'scale' => $scale,
        ]);
    }
}

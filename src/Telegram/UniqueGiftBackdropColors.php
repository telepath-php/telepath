<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the colors of the backdrop of a unique gift.
 */
class UniqueGiftBackdropColors extends Type
{
    /** The color in the center of the backdrop in RGB format */
    public int $center_color;

    /** The color on the edges of the backdrop in RGB format */
    public int $edge_color;

    /** The color to be applied to the symbol in RGB format */
    public int $symbol_color;

    /** The color for the text on the backdrop in RGB format */
    public int $text_color;

    /**
     * @param  int  $center_color  The color in the center of the backdrop in RGB format
     * @param  int  $edge_color  The color on the edges of the backdrop in RGB format
     * @param  int  $symbol_color  The color to be applied to the symbol in RGB format
     * @param  int  $text_color  The color for the text on the backdrop in RGB format
     */
    public static function make(int $center_color, int $edge_color, int $symbol_color, int $text_color): static
    {
        return new static([
            'center_color' => $center_color,
            'edge_color' => $edge_color,
            'symbol_color' => $symbol_color,
            'text_color' => $text_color,
        ]);
    }
}

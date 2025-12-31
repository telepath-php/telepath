<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the background of a gift.
 */
class GiftBackground extends Type
{
    /** Center color of the background in RGB format */
    public int $center_color;

    /** Edge color of the background in RGB format */
    public int $edge_color;

    /** Text color of the background in RGB format */
    public int $text_color;

    /**
     * @param  int  $center_color  Center color of the background in RGB format
     * @param  int  $edge_color  Edge color of the background in RGB format
     * @param  int  $text_color  Text color of the background in RGB format
     */
    public static function make(int $center_color, int $edge_color, int $text_color): static
    {
        return new static([
            'center_color' => $center_color,
            'edge_color' => $edge_color,
            'text_color' => $text_color,
        ]);
    }
}

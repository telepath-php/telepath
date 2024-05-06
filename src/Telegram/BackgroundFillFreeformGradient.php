<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 */
class BackgroundFillFreeformGradient extends BackgroundFill
{
    /** Type of the background fill, always “freeform_gradient” */
    public string $type = 'freeform_gradient';

    /**
     * A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     *
     * @var int[]
     */
    public array $colors;

    /**
     * @param  int[]  $colors  A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     */
    public static function make(array $colors): static
    {
        return new static([
            'colors' => $colors,
        ]);
    }
}

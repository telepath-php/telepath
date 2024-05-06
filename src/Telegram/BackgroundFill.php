<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 */
abstract class BackgroundFill extends Type implements Factory
{
    /** Type of the background fill */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'solid' => new BackgroundFillSolid($data, $bot),
            'gradient' => new BackgroundFillGradient($data, $bot),
            'freeform_gradient' => new BackgroundFillFreeformGradient($data, $bot),
        };
    }
}

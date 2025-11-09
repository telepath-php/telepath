<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes a profile photo to set. Currently, it can be one of
 */
abstract class InputProfilePhoto extends Type implements Factory
{
    /** Type of the profile photo */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'static' => new InputProfilePhotoStatic($data, $bot),
            'animated' => new InputProfilePhotoAnimated($data, $bot),
        };
    }
}

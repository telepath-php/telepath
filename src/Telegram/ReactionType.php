<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 */
abstract class ReactionType extends Type implements Factory
{
    /** Type of the reaction */
    public string $type;

    public static function factory(array $data, Bot $bot = null): self
    {
        return match ($data['type']) {
            'emoji' => new ReactionTypeEmoji($data, $bot),
            'custom_emoji' => new ReactionTypeCustomEmoji($data, $bot),
        };
    }
}

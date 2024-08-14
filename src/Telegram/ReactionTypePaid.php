<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The reaction is paid.
 */
class ReactionTypePaid extends ReactionType
{
    /** Type of the reaction, always “paid” */
    public string $type = 'paid';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

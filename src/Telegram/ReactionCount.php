<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
class ReactionCount extends Type
{
    /** Type of the reaction */
    public ReactionType $type;

    /** Number of times the reaction was added */
    public int $total_count;

    /**
     * @param  ReactionType  $type  Type of the reaction
     * @param  int  $total_count  Number of times the reaction was added
     */
    public static function make(ReactionType $type, int $total_count): static
    {
        return new static([
            'type' => $type,
            'total_count' => $total_count,
        ]);
    }
}

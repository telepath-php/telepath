<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represent a list of gifts.
 */
class Gifts extends Type
{
    /**
     * The list of gifts
     *
     * @var Gift[]
     */
    public array $gifts;

    /**
     * @param  Gift[]  $gifts  The list of gifts
     */
    public static function make(array $gifts): static
    {
        return new static([
            'gifts' => $gifts,
        ]);
    }
}

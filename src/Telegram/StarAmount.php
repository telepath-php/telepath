<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes an amount of Telegram Stars.
 */
class StarAmount extends Type
{
    /** Integer amount of Telegram Stars, rounded to 0; can be negative */
    public int $amount;

    /** <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if <em>amount</em> is non-positive */
    public ?int $nanostar_amount = null;

    /**
     * @param  int  $amount  Integer amount of Telegram Stars, rounded to 0; can be negative
     * @param  int  $nanostar_amount  <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if <em>amount</em> is non-positive
     */
    public static function make(int $amount, ?int $nanostar_amount = null): static
    {
        return new static([
            'amount' => $amount,
            'nanostar_amount' => $nanostar_amount,
        ]);
    }
}

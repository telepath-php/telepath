<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the price of a suggested post.
 */
class SuggestedPostPrice extends Type
{
    /** Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for toncoins */
    public string $currency;

    /** The amount of the currency that will be paid for the post in the <em>smallest units</em> of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be between 10000000 and 10000000000000. */
    public int $amount;

    /**
     * @param  string  $currency  Currency in which the post will be paid. Currently, must be one of “XTR” for Telegram Stars or “TON” for toncoins
     * @param  int  $amount  The amount of the currency that will be paid for the post in the <em>smallest units</em> of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be between 10000000 and 10000000000000.
     */
    public static function make(string $currency, int $amount): static
    {
        return new static([
            'currency' => $currency,
            'amount' => $amount,
        ]);
    }
}

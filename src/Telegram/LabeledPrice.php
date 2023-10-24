<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a portion of the price for goods or services.
 */
class LabeledPrice extends Type
{
    /** Portion label */
    public string $label;

    /** Price of the product in the <em>smallest units</em> of the <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $amount;

    /**
     * @param  string  $label Portion label
     * @param  int  $amount Price of the product in the <em>smallest units</em> of the <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public static function make(string $label, int $amount): static
    {
        return new static([
            'label' => $label,
            'amount' => $amount,
        ]);
    }
}

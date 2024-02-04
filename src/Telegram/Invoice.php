<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains basic information about an invoice.
 */
class Invoice extends Type
{
    /** Product name */
    public string $title;

    /** Product description */
    public string $description;

    /** Unique bot deep-linking parameter that can be used to generate this invoice */
    public string $start_parameter;

    /** Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code */
    public string $currency;

    /** Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $total_amount;

    /**
     * @param  string  $title  Product name
     * @param  string  $description  Product description
     * @param  string  $start_parameter  Unique bot deep-linking parameter that can be used to generate this invoice
     * @param  string  $currency  Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code
     * @param  int  $total_amount  Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public static function make(
        string $title,
        string $description,
        string $start_parameter,
        string $currency,
        int $total_amount,
    ): static {
        return new static([
            'title' => $title,
            'description' => $description,
            'start_parameter' => $start_parameter,
            'currency' => $currency,
            'total_amount' => $total_amount,
        ]);
    }
}

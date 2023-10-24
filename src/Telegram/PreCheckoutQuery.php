<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about an incoming pre-checkout query.
 */
class PreCheckoutQuery extends Type
{
    /** Unique query identifier */
    public string $id;

    /** User who sent the query */
    public User $from;

    /** Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code */
    public string $currency;

    /** Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $total_amount;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** <em>Optional</em>. Identifier of the shipping option chosen by the user */
    public ?string $shipping_option_id = null;

    /** <em>Optional</em>. Order information provided by the user */
    public ?OrderInfo $order_info = null;

    /**
     * @param  string  $id Unique query identifier
     * @param  User  $from User who sent the query
     * @param  string  $currency Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code
     * @param  int  $total_amount Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param  string  $invoice_payload Bot specified invoice payload
     * @param  string  $shipping_option_id <em>Optional</em>. Identifier of the shipping option chosen by the user
     * @param  OrderInfo  $order_info <em>Optional</em>. Order information provided by the user
     */
    public static function make(
        string $id,
        User $from,
        string $currency,
        int $total_amount,
        string $invoice_payload,
        string $shipping_option_id = null,
        OrderInfo $order_info = null,
    ): static {
        return new static([
            'id' => $id,
            'from' => $from,
            'currency' => $currency,
            'total_amount' => $total_amount,
            'invoice_payload' => $invoice_payload,
            'shipping_option_id' => $shipping_option_id,
            'order_info' => $order_info,
        ]);
    }
}

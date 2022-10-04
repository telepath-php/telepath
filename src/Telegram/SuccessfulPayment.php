<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains basic information about a successful payment.
 */
class SuccessfulPayment extends Type
{
    /** Three-letter ISO 4217 currency code */
    public string $currency;

    /** Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $total_amount;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** Telegram payment identifier */
    public string $telegram_payment_charge_id;

    /** Provider payment identifier */
    public string $provider_payment_charge_id;

    /** Optional. Identifier of the shipping option chosen by the user */
    public ?string $shipping_option_id = null;

    /** Optional. Order information provided by the user */
    public ?OrderInfo $order_info = null;

    /**
     * @param string $currency Three-letter ISO 4217 currency code
     * @param int $total_amount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param string $invoice_payload Bot specified invoice payload
     * @param string $telegram_payment_charge_id Telegram payment identifier
     * @param string $provider_payment_charge_id Provider payment identifier
     * @param string $shipping_option_id Optional. Identifier of the shipping option chosen by the user
     * @param OrderInfo $order_info Optional. Order information provided by the user
     */
    public static function make(
        string $currency,
        int $total_amount,
        string $invoice_payload,
        string $telegram_payment_charge_id,
        string $provider_payment_charge_id,
        ?string $shipping_option_id = null,
        ?OrderInfo $order_info = null,
    ): static {
        return new static([
            'currency' => $currency,
            'total_amount' => $total_amount,
            'invoice_payload' => $invoice_payload,
            'telegram_payment_charge_id' => $telegram_payment_charge_id,
            'provider_payment_charge_id' => $provider_payment_charge_id,
            'shipping_option_id' => $shipping_option_id,
            'order_info' => $order_info,
        ]);
    }
}

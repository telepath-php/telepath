<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains basic information about a refunded payment.
 */
class RefundedPayment extends Type
{
    /** Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code, or “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. Currently, always “XTR” */
    public string $currency = 'XTR';

    /** Total refunded price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $total_amount;

    /** Bot-specified invoice payload */
    public string $invoice_payload;

    /** Telegram payment identifier */
    public string $telegram_payment_charge_id;

    /** <em>Optional</em>. Provider payment identifier */
    public ?string $provider_payment_charge_id = null;

    /**
     * @param  int  $total_amount  Total refunded price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param  string  $invoice_payload  Bot-specified invoice payload
     * @param  string  $telegram_payment_charge_id  Telegram payment identifier
     * @param  string  $provider_payment_charge_id  <em>Optional</em>. Provider payment identifier
     */
    public static function make(
        int $total_amount,
        string $invoice_payload,
        string $telegram_payment_charge_id,
        ?string $provider_payment_charge_id = null,
    ): static {
        return new static([
            'total_amount' => $total_amount,
            'invoice_payload' => $invoice_payload,
            'telegram_payment_charge_id' => $telegram_payment_charge_id,
            'provider_payment_charge_id' => $provider_payment_charge_id,
        ]);
    }
}

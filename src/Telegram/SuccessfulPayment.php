<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 */
class SuccessfulPayment extends Type
{
    /** Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code, or “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a> */
    public string $currency;

    /** Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). */
    public int $total_amount;

    /** Bot-specified invoice payload */
    public string $invoice_payload;

    /** Telegram payment identifier */
    public string $telegram_payment_charge_id;

    /** Provider payment identifier */
    public string $provider_payment_charge_id;

    /** <em>Optional</em>. Expiration date of the subscription, in Unix time; for recurring payments only */
    public ?int $subscription_expiration_date = null;

    /** <em>Optional</em>. True, if the payment is a recurring payment for a subscription */
    public ?bool $is_recurring = null;

    /** <em>Optional</em>. True, if the payment is the first payment for a subscription */
    public ?bool $is_first_recurring = null;

    /** <em>Optional</em>. Identifier of the shipping option chosen by the user */
    public ?string $shipping_option_id = null;

    /** <em>Optional</em>. Order information provided by the user */
    public ?OrderInfo $order_info = null;

    /**
     * @param  string  $currency  Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code, or “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>
     * @param  int  $total_amount  Total price in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @param  string  $invoice_payload  Bot-specified invoice payload
     * @param  string  $telegram_payment_charge_id  Telegram payment identifier
     * @param  string  $provider_payment_charge_id  Provider payment identifier
     * @param  int  $subscription_expiration_date  <em>Optional</em>. Expiration date of the subscription, in Unix time; for recurring payments only
     * @param  bool  $is_recurring  <em>Optional</em>. True, if the payment is a recurring payment for a subscription
     * @param  bool  $is_first_recurring  <em>Optional</em>. True, if the payment is the first payment for a subscription
     * @param  string  $shipping_option_id  <em>Optional</em>. Identifier of the shipping option chosen by the user
     * @param  OrderInfo  $order_info  <em>Optional</em>. Order information provided by the user
     */
    public static function make(
        string $currency,
        int $total_amount,
        string $invoice_payload,
        string $telegram_payment_charge_id,
        string $provider_payment_charge_id,
        ?int $subscription_expiration_date = null,
        ?bool $is_recurring = null,
        ?bool $is_first_recurring = null,
        ?string $shipping_option_id = null,
        ?OrderInfo $order_info = null,
    ): static {
        return new static([
            'currency' => $currency,
            'total_amount' => $total_amount,
            'invoice_payload' => $invoice_payload,
            'telegram_payment_charge_id' => $telegram_payment_charge_id,
            'provider_payment_charge_id' => $provider_payment_charge_id,
            'subscription_expiration_date' => $subscription_expiration_date,
            'is_recurring' => $is_recurring,
            'is_first_recurring' => $is_first_recurring,
            'shipping_option_id' => $shipping_option_id,
            'order_info' => $order_info,
        ]);
    }
}

<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class SuccessfulPayment extends \Tii\Telepath\Type
{
    public readonly string $currency;

    public readonly int $total_amount;

    public readonly string $invoice_payload;

    public readonly string $shipping_option_id;

    public readonly OrderInfo $order_info;

    public readonly string $telegram_payment_charge_id;

    public readonly string $provider_payment_charge_id;
}


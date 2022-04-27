<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PreCheckoutQuery extends \Tii\Telepath\Type
{
    public readonly string $id;

    public readonly User $from;

    public readonly string $currency;

    public readonly int $total_amount;

    public readonly string $invoice_payload;

    public readonly string $shipping_option_id;

    public readonly OrderInfo $order_info;
}


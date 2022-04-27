<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PreCheckoutQuery extends \Tii\Telepath\Type
{
    public string $id;

    public User $from;

    public string $currency;

    public int $total_amount;

    public string $invoice_payload;

    public string $shipping_option_id;

    public OrderInfo $order_info;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


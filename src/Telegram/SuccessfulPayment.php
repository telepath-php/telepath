<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class SuccessfulPayment extends \Tii\Telepath\Type
{
	public string $currency;
	public int $total_amount;
	public string $invoice_payload;
	public string $shipping_option_id;
	public OrderInfo $order_info;
	public string $telegram_payment_charge_id;
	public string $provider_payment_charge_id;
}

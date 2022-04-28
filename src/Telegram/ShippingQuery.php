<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class ShippingQuery extends \Tii\Telepath\Type
{
	public string $id;
	public User $from;
	public string $invoice_payload;
	public ShippingAddress $shipping_address;
}

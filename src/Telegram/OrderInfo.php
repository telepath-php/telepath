<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents information about an order.
 */
class OrderInfo extends \Tii\Telepath\Type
{
	/** Optional. User name */
	public string $name;

	/** Optional. User's phone number */
	public string $phone_number;

	/** Optional. User email */
	public string $email;

	/** Optional. User shipping address */
	public ShippingAddress $shipping_address;
}

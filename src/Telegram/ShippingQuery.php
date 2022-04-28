<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery extends \Tii\Telepath\Type
{
	/** Unique query identifier */
	public string $id;

	/** User who sent the query */
	public User $from;

	/** Bot specified invoice payload */
	public string $invoice_payload;

	/** User specified shipping address */
	public ShippingAddress $shipping_address;
}

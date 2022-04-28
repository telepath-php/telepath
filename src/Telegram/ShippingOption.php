<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one shipping option.
 */
class ShippingOption extends \Tii\Telepath\Type
{
	/** Shipping option identifier */
	public string $id;

	/** Option title */
	public string $title;

	/**
	 * List of price portions
	 * @var LabeledPrice[]
	 */
	public array $prices;
}

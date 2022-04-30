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


	/**
	 * @param string $id Shipping option identifier
	 * @param string $title Option title
	 * @param LabeledPrice[] $prices List of price portions
	 */
	public static function make(string $id, string $title, array $prices): static
	{
		return new static([
		    'id' => $id,
		    'title' => $title,
		    'prices' => $prices,
		]);
	}
}

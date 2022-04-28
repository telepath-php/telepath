<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a shipping address.
 */
class ShippingAddress extends \Tii\Telepath\Type
{
	/** ISO 3166-1 alpha-2 country code */
	public string $country_code;

	/** State, if applicable */
	public string $state;

	/** City */
	public string $city;

	/** First line for the address */
	public string $street_line1;

	/** Second line for the address */
	public string $street_line2;

	/** Address post code */
	public string $post_code;
}

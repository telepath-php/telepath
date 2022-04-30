<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 */
class InputLocationMessageContent extends InputMessageContent
{
	/** Latitude of the location in degrees */
	public float $latitude;

	/** Longitude of the location in degrees */
	public float $longitude;

	/** Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
	public ?float $horizontal_accuracy = null;

	/** Optional. Period in seconds for which the location can be updated, should be between 60 and 86400. */
	public ?int $live_period = null;

	/** Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
	public ?int $heading = null;

	/** Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
	public ?int $proximity_alert_radius = null;


	/**
	 * @param float $latitude Latitude of the location in degrees
	 * @param float $longitude Longitude of the location in degrees
	 * @param float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
	 * @param int $live_period Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
	 * @param int $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
	 * @param int $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
	 */
	public static function make(
		float $latitude,
		float $longitude,
		?float $horizontal_accuracy = null,
		?int $live_period = null,
		?int $heading = null,
		?int $proximity_alert_radius = null
	): static {
		return new static([
		    'latitude' => $latitude,
		    'longitude' => $longitude,
		    'horizontal_accuracy' => $horizontal_accuracy,
		    'live_period' => $live_period,
		    'heading' => $heading,
		    'proximity_alert_radius' => $proximity_alert_radius,
		]);
	}
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a point on the map.
 */
class Location extends \Tii\Telepath\Type
{
	/** Longitude as defined by sender */
	public float $longitude;

	/** Latitude as defined by sender */
	public float $latitude;

	/** Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
	public ?float $horizontal_accuracy = null;

	/** Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only. */
	public ?int $live_period = null;

	/** Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only. */
	public ?int $heading = null;

	/** Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only. */
	public ?int $proximity_alert_radius = null;


	/**
	 * @param float $longitude Longitude as defined by sender
	 * @param float $latitude Latitude as defined by sender
	 * @param float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
	 * @param int $live_period Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
	 * @param int $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
	 * @param int $proximity_alert_radius Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
	 */
	public static function make(
		float $longitude,
		float $latitude,
		?float $horizontal_accuracy = null,
		?int $live_period = null,
		?int $heading = null,
		?int $proximity_alert_radius = null
	): static {
		return new static([
		    'longitude' => $longitude,
		    'latitude' => $latitude,
		    'horizontal_accuracy' => $horizontal_accuracy,
		    'live_period' => $live_period,
		    'heading' => $heading,
		    'proximity_alert_radius' => $proximity_alert_radius,
		]);
	}
}

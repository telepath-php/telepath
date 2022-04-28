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
	public ?float $horizontal_accuracy;

	/** Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only. */
	public ?int $live_period;

	/** Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only. */
	public ?int $heading;

	/** Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only. */
	public ?int $proximity_alert_radius;
}

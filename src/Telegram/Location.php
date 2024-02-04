<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a point on the map.
 */
class Location extends Type
{
    /** Longitude as defined by sender */
    public float $longitude;

    /** Latitude as defined by sender */
    public float $latitude;

    /** <em>Optional</em>. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontal_accuracy = null;

    /** <em>Optional</em>. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only. */
    public ?int $live_period = null;

    /** <em>Optional</em>. The direction in which user is moving, in degrees; 1-360. For active live locations only. */
    public ?int $heading = null;

    /** <em>Optional</em>. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only. */
    public ?int $proximity_alert_radius = null;

    /**
     * @param  float  $longitude  Longitude as defined by sender
     * @param  float  $latitude  Latitude as defined by sender
     * @param  float  $horizontal_accuracy  <em>Optional</em>. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param  int  $live_period  <em>Optional</em>. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     * @param  int  $heading  <em>Optional</em>. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @param  int  $proximity_alert_radius  <em>Optional</em>. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public static function make(
        float $longitude,
        float $latitude,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
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

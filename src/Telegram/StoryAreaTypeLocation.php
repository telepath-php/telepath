<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 */
class StoryAreaTypeLocation extends StoryAreaType
{
    /** Type of the area, always “location” */
    public string $type = 'location';

    /** Location latitude in degrees */
    public float $latitude;

    /** Location longitude in degrees */
    public float $longitude;

    /** <em>Optional</em>. Address of the location */
    public ?LocationAddress $address = null;

    /**
     * @param  float  $latitude  Location latitude in degrees
     * @param  float  $longitude  Location longitude in degrees
     * @param  LocationAddress  $address  <em>Optional</em>. Address of the location
     */
    public static function make(float $latitude, float $longitude, ?LocationAddress $address = null): static
    {
        return new static([
            'latitude' => $latitude,
            'longitude' => $longitude,
            'address' => $address,
        ]);
    }
}

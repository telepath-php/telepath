<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a venue.
 */
class Venue extends Type
{
    /** Venue location. Can't be a live location */
    public Location $location;

    /** Name of the venue */
    public string $title;

    /** Address of the venue */
    public string $address;

    /** <em>Optional</em>. Foursquare identifier of the venue */
    public ?string $foursquare_id = null;

    /** <em>Optional</em>. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
    public ?string $foursquare_type = null;

    /** <em>Optional</em>. Google Places identifier of the venue */
    public ?string $google_place_id = null;

    /** <em>Optional</em>. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.) */
    public ?string $google_place_type = null;

    /**
     * @param  Location  $location  Venue location. Can't be a live location
     * @param  string  $title  Name of the venue
     * @param  string  $address  Address of the venue
     * @param  string  $foursquare_id  <em>Optional</em>. Foursquare identifier of the venue
     * @param  string  $foursquare_type  <em>Optional</em>. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param  string  $google_place_id  <em>Optional</em>. Google Places identifier of the venue
     * @param  string  $google_place_type  <em>Optional</em>. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)
     */
    public static function make(
        Location $location,
        string $title,
        string $address,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
    ): static {
        return new static([
            'location' => $location,
            'title' => $title,
            'address' => $address,
            'foursquare_id' => $foursquare_id,
            'foursquare_type' => $foursquare_type,
            'google_place_id' => $google_place_id,
            'google_place_type' => $google_place_type,
        ]);
    }
}

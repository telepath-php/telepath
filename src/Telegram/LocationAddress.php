<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the physical address of a location.
 */
class LocationAddress extends Type
{
    /** The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located */
    public string $country_code;

    /** <em>Optional</em>. State of the location */
    public ?string $state = null;

    /** <em>Optional</em>. City of the location */
    public ?string $city = null;

    /** <em>Optional</em>. Street address of the location */
    public ?string $street = null;

    /**
     * @param  string  $country_code  The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     * @param  string  $state  <em>Optional</em>. State of the location
     * @param  string  $city  <em>Optional</em>. City of the location
     * @param  string  $street  <em>Optional</em>. Street address of the location
     */
    public static function make(
        string $country_code,
        ?string $state = null,
        ?string $city = null,
        ?string $street = null,
    ): static {
        return new static([
            'country_code' => $country_code,
            'state' => $state,
            'city' => $city,
            'street' => $street,
        ]);
    }
}

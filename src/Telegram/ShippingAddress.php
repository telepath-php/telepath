<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a shipping address.
 */
class ShippingAddress extends Type
{
    /** Two-letter <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> country code */
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

    /**
     * @param  string  $country_code  Two-letter <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> country code
     * @param  string  $state  State, if applicable
     * @param  string  $city  City
     * @param  string  $street_line1  First line for the address
     * @param  string  $street_line2  Second line for the address
     * @param  string  $post_code  Address post code
     */
    public static function make(
        string $country_code,
        string $state,
        string $city,
        string $street_line1,
        string $street_line2,
        string $post_code,
    ): static {
        return new static([
            'country_code' => $country_code,
            'state' => $state,
            'city' => $city,
            'street_line1' => $street_line1,
            'street_line2' => $street_line2,
            'post_code' => $post_code,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains information about the location of a Telegram Business account.
 */
class BusinessLocation extends Type
{
    /** Address of the business */
    public string $address;

    /** <em>Optional</em>. Location of the business */
    public ?Location $location = null;

    /**
     * @param  string  $address  Address of the business
     * @param  Location  $location  <em>Optional</em>. Location of the business
     */
    public static function make(string $address, ?Location $location = null): static
    {
        return new static([
            'address' => $address,
            'location' => $location,
        ]);
    }
}

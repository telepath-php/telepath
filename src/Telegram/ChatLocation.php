<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends Type
{
    /** The location to which the supergroup is connected. Can't be a live location. */
    public Location $location;

    /** Location address; 1-64 characters, as defined by the chat owner */
    public string $address;

    /**
     * @param Location $location The location to which the supergroup is connected. Can't be a live location.
     * @param string $address Location address; 1-64 characters, as defined by the chat owner
     */
    public static function make(Location $location, string $address): static
    {
        return new static([
            'location' => $location,
            'address' => $address,
        ]);
    }
}

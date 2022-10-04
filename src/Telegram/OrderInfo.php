<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents information about an order.
 */
class OrderInfo extends Type
{
    /** Optional. User name */
    public ?string $name = null;

    /** Optional. User's phone number */
    public ?string $phone_number = null;

    /** Optional. User email */
    public ?string $email = null;

    /** Optional. User shipping address */
    public ?ShippingAddress $shipping_address = null;

    /**
     * @param string $name Optional. User name
     * @param string $phone_number Optional. User's phone number
     * @param string $email Optional. User email
     * @param ShippingAddress $shipping_address Optional. User shipping address
     */
    public static function make(
        ?string $name = null,
        ?string $phone_number = null,
        ?string $email = null,
        ?ShippingAddress $shipping_address = null,
    ): static {
        return new static([
            'name' => $name,
            'phone_number' => $phone_number,
            'email' => $email,
            'shipping_address' => $shipping_address,
        ]);
    }
}

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
    /** <em>Optional</em>. User name */
    public ?string $name = null;

    /** <em>Optional</em>. User's phone number */
    public ?string $phone_number = null;

    /** <em>Optional</em>. User email */
    public ?string $email = null;

    /** <em>Optional</em>. User shipping address */
    public ?ShippingAddress $shipping_address = null;

    /**
     * @param string $name <em>Optional</em>. User name
     * @param string $phone_number <em>Optional</em>. User's phone number
     * @param string $email <em>Optional</em>. User email
     * @param ShippingAddress $shipping_address <em>Optional</em>. User shipping address
     */
    public static function make(
        ?string $name = null,
        ?string $phone_number = null,
        ?string $email = null,
        ?ShippingAddress $shipping_address = null,
    ): static
    {
        return new static([
            'name' => $name,
            'phone_number' => $phone_number,
            'email' => $email,
            'shipping_address' => $shipping_address,
        ]);
    }
}

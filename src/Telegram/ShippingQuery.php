<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery extends Type
{
    /** Unique query identifier */
    public string $id;

    /** User who sent the query */
    public User $from;

    /** Bot specified invoice payload */
    public string $invoice_payload;

    /** User specified shipping address */
    public ShippingAddress $shipping_address;

    /**
     * @param string $id Unique query identifier
     * @param User $from User who sent the query
     * @param string $invoice_payload Bot specified invoice payload
     * @param ShippingAddress $shipping_address User specified shipping address
     */
    public static function make(
        string $id,
        User $from,
        string $invoice_payload,
        ShippingAddress $shipping_address
    ): static {
        return new static([
            'id' => $id,
            'from' => $from,
            'invoice_payload' => $invoice_payload,
            'shipping_address' => $shipping_address,
        ]);
    }
}

<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class OrderInfo extends \Tii\Telepath\Type
{
    public string $name;

    public string $phone_number;

    public string $email;

    public ShippingAddress $shipping_address;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


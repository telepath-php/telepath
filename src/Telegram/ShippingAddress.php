<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ShippingAddress extends \Tii\Telepath\Type
{
    public string $country_code;

    public string $state;

    public string $city;

    public string $street_line1;

    public string $street_line2;

    public string $post_code;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


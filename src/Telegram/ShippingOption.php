<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ShippingOption extends \Tii\Telepath\Type
{
    public string $id;

    public string $title;

    /**
     * @var LabeledPrice[]
     */
    public array $prices;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


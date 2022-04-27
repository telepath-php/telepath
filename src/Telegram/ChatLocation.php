<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatLocation extends \Tii\Telepath\Type
{
    public Location $location;

    public string $address;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


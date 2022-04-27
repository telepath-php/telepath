<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Contact extends \Tii\Telepath\Type
{
    public string $phone_number;

    public string $first_name;

    public string $last_name;

    public int $user_id;

    public string $vcard;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


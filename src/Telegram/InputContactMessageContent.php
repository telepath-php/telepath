<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputContactMessageContent extends InputMessageContent
{
    public string $phone_number;

    public string $first_name;

    public string $last_name;

    public string $vcard;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


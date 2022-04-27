<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportElementErrorDataField extends PassportElementError
{
    public string $source;

    public string $type;

    public string $field_name;

    public string $data_hash;

    public string $message;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


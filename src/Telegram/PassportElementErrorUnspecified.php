<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportElementErrorUnspecified extends PassportElementError
{
    public string $source;

    public string $type;

    public string $element_hash;

    public string $message;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


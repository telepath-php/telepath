<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportElementErrorReverseSide extends PassportElementError
{
    public string $source;

    public string $type;

    public string $file_hash;

    public string $message;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


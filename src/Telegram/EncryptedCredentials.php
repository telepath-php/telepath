<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class EncryptedCredentials extends \Tii\Telepath\Type
{
    public string $data;

    public string $hash;

    public string $secret;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


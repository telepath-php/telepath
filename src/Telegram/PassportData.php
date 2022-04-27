<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportData extends \Tii\Telepath\Type
{
    /**
     * @var EncryptedPassportElement[]
     */
    public array $data;

    public EncryptedCredentials $credentials;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


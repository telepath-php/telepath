<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class EncryptedPassportElement extends \Tii\Telepath\Type
{
    public string $type;

    public string $data;

    public string $phone_number;

    public string $email;

    /**
     * @var PassportFile[]
     */
    public array $files;

    public PassportFile $front_side;

    public PassportFile $reverse_side;

    public PassportFile $selfie;

    /**
     * @var PassportFile[]
     */
    public array $translation;

    public string $hash;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class EncryptedPassportElement extends \Tii\Telepath\Type
{
    public readonly string $type;

    public readonly string $data;

    public readonly string $phone_number;

    public readonly string $email;

    /**
     * @var PassportFile[]
     */
    public readonly array $files;

    public readonly PassportFile $front_side;

    public readonly PassportFile $reverse_side;

    public readonly PassportFile $selfie;

    /**
     * @var PassportFile[]
     */
    public readonly array $translation;

    public readonly string $hash;
}


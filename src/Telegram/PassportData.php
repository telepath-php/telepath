<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 */
class PassportData extends \Tii\Telepath\Type
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @var EncryptedPassportElement[]
     */
    public array $data;

    /** Encrypted credentials required to decrypt the data */
    public EncryptedCredentials $credentials;

    /**
     * @param EncryptedPassportElement[] $data Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param EncryptedCredentials $credentials Encrypted credentials required to decrypt the data
     */
    public static function make(array $data, EncryptedCredentials $credentials): static
    {
        return new static([
            'data' => $data,
            'credentials' => $credentials,
        ]);
    }
}

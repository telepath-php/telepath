<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData extends Type
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @var EncryptedPassportElement[]
     */
    public array $data;

    /** Encrypted credentials required to decrypt the data */
    public EncryptedCredentials $credentials;

    /**
     * @param  EncryptedPassportElement[]  $data  Array with information about documents and other Telegram Passport elements that was shared with the bot
     * @param  EncryptedCredentials  $credentials  Encrypted credentials required to decrypt the data
     */
    public static function make(array $data, EncryptedCredentials $credentials): static
    {
        return new static([
            'data' => $data,
            'credentials' => $credentials,
        ]);
    }
}

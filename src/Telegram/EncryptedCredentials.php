<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
class EncryptedCredentials extends \Tii\Telepath\Type
{
    /** Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication */
    public string $data;

    /** Base64-encoded data hash for data authentication */
    public string $hash;

    /** Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption */
    public string $secret;

    /**
     * @param string $data Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
     * @param string $hash Base64-encoded data hash for data authentication
     * @param string $secret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     */
    public static function make(string $data, string $hash, string $secret): static
    {
        return new static([
            'data' => $data,
            'hash' => $hash,
            'secret' => $secret,
        ]);
    }
}

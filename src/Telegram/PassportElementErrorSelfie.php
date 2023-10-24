<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSelfie extends PassportElementError
{
    /** Error source, must be <em>selfie</em> */
    public string $source = 'selfie';

    /** Base64-encoded hash of the file with the selfie */
    public string $file_hash;

    /**
     * @param  string  $type The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
     * @param  string  $file_hash Base64-encoded hash of the file with the selfie
     * @param  string  $message Error message
     */
    public static function make(string $type, string $file_hash, string $message): static
    {
        return new static([
            'type' => $type,
            'file_hash' => $file_hash,
            'message' => $message,
        ]);
    }
}

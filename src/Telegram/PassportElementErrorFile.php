<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
class PassportElementErrorFile extends PassportElementError
{
    /** Error source, must be <em>file</em> */
    public string $source = 'file';

    /** Base64-encoded file hash */
    public string $file_hash;

    /**
     * @param  string  $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param  string  $file_hash Base64-encoded file hash
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

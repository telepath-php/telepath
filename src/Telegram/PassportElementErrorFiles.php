<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends PassportElementError
{
    /** Error source, must be <em>files</em> */
    public string $source = 'files';

    /**
     * List of base64-encoded file hashes
     *
     * @var string[]
     */
    public array $file_hashes;

    /**
     * @param  string  $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param  string[]  $file_hashes List of base64-encoded file hashes
     * @param  string  $message Error message
     */
    public static function make(string $type, array $file_hashes, string $message): static
    {
        return new static([
            'type' => $type,
            'file_hashes' => $file_hashes,
            'message' => $message,
        ]);
    }
}

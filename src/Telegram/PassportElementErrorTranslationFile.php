<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
class PassportElementErrorTranslationFile extends PassportElementError
{
    /** Error source, must be translation_file */
    public string $source = 'translation_file';

    /** Base64-encoded file hash */
    public string $file_hash;

    /**
     * @param string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param string $file_hash Base64-encoded file hash
     * @param string $message Error message
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

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
class PassportElementErrorTranslationFiles extends PassportElementError
{
    /** Error source, must be <em>translation_files</em> */
    public string $source = 'translation_files';

    /**
     * List of base64-encoded file hashes
     * @var string[]
     */
    public array $file_hashes;

    /**
     * @param string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     * @param string[] $file_hashes List of base64-encoded file hashes
     * @param string $message Error message
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

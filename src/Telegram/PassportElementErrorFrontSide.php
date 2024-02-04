<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
class PassportElementErrorFrontSide extends PassportElementError
{
    /** Error source, must be <em>front_side</em> */
    public string $source = 'front_side';

    /** Base64-encoded hash of the file with the front side of the document */
    public string $file_hash;

    /**
     * @param  string  $type  The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
     * @param  string  $file_hash  Base64-encoded hash of the file with the front side of the document
     * @param  string  $message  Error message
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

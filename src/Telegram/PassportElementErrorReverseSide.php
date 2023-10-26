<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
class PassportElementErrorReverseSide extends PassportElementError
{
    /** Error source, must be <em>reverse_side</em> */
    public string $source = 'reverse_side';

    /** Base64-encoded hash of the file with the reverse side of the document */
    public string $file_hash;

    /**
     * @param string $type The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
     * @param string $file_hash Base64-encoded hash of the file with the reverse side of the document
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

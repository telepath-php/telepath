<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified extends PassportElementError
{
    /** Error source, must be unspecified */
    public string $source = 'unspecified';

    /** Base64-encoded element hash */
    public string $element_hash;

    /**
     * @param string $type Type of element of the user's Telegram Passport which has the issue
     * @param string $element_hash Base64-encoded element hash
     * @param string $message Error message
     */
    public static function make(string $type, string $element_hash, string $message): static
    {
        return new static([
            'type' => $type,
            'element_hash' => $element_hash,
            'message' => $message,
        ]);
    }
}

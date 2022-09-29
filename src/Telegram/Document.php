<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Optional. Document thumbnail as defined by sender */
    public ?PhotoSize $thumb = null;

    /** Optional. Original filename as defined by sender */
    public ?string $file_name = null;

    /** Optional. MIME type of the file as defined by sender */
    public ?string $mime_type = null;

    /** Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param PhotoSize $thumb Optional. Document thumbnail as defined by sender
     * @param string $file_name Optional. Original filename as defined by sender
     * @param string $mime_type Optional. MIME type of the file as defined by sender
     * @param int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        ?PhotoSize $thumb = null,
        ?string $file_name = null,
        ?string $mime_type = null,
        ?int $file_size = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'thumb' => $thumb,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
        ]);
    }
}

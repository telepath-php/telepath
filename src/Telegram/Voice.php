<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a voice note.
 */
class Voice extends \Tii\Telepath\Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Duration of the audio in seconds as defined by sender */
    public int $duration;

    /** Optional. MIME type of the file as defined by sender */
    public ?string $mime_type = null;

    /** Optional. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $duration Duration of the audio in seconds as defined by sender
     * @param string $mime_type Optional. MIME type of the file as defined by sender
     * @param int $file_size Optional. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $duration,
        ?string $mime_type = null,
        ?int $file_size = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'duration' => $duration,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
        ]);
    }
}

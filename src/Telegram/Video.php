<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * This object represents a video file.
 */
class Video extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Video width as defined by sender */
    public int $width;

    /** Video height as defined by sender */
    public int $height;

    /** Duration of the video in seconds as defined by sender */
    public int $duration;

    /** Optional. Video thumbnail */
    public ?PhotoSize $thumb = null;

    /** Optional. Original filename as defined by sender */
    public ?string $file_name = null;

    /** Optional. Mime type of a file as defined by sender */
    public ?string $mime_type = null;

    /** Optional. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $width Video width as defined by sender
     * @param int $height Video height as defined by sender
     * @param int $duration Duration of the video in seconds as defined by sender
     * @param PhotoSize $thumb Optional. Video thumbnail
     * @param string $file_name Optional. Original filename as defined by sender
     * @param string $mime_type Optional. Mime type of a file as defined by sender
     * @param int $file_size Optional. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int $duration,
        ?PhotoSize $thumb = null,
        ?string $file_name = null,
        ?string $mime_type = null,
        ?int $file_size = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
            'thumb' => $thumb,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
        ]);
    }
}

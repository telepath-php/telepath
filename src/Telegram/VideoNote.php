<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote extends \Tii\Telepath\Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Video width and height (diameter of the video message) as defined by sender */
    public int $length;

    /** Duration of the video in seconds as defined by sender */
    public int $duration;

    /** Optional. Video thumbnail */
    public ?PhotoSize $thumb = null;

    /** Optional. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $length Video width and height (diameter of the video message) as defined by sender
     * @param int $duration Duration of the video in seconds as defined by sender
     * @param PhotoSize $thumb Optional. Video thumbnail
     * @param int $file_size Optional. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $length,
        int $duration,
        ?PhotoSize $thumb = null,
        ?int $file_size = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'length' => $length,
            'duration' => $duration,
            'thumb' => $thumb,
            'file_size' => $file_size,
        ]);
    }
}

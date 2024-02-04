<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Video width and height (diameter of the video message) as defined by sender */
    public int $length;

    /** Duration of the video in seconds as defined by sender */
    public int $duration;

    /** <em>Optional</em>. Video thumbnail */
    public ?PhotoSize $thumbnail = null;

    /** <em>Optional</em>. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param  string  $file_id  Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id  Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  int  $length  Video width and height (diameter of the video message) as defined by sender
     * @param  int  $duration  Duration of the video in seconds as defined by sender
     * @param  PhotoSize  $thumbnail  <em>Optional</em>. Video thumbnail
     * @param  int  $file_size  <em>Optional</em>. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $length,
        int $duration,
        ?PhotoSize $thumbnail = null,
        ?int $file_size = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'length' => $length,
            'duration' => $duration,
            'thumbnail' => $thumbnail,
            'file_size' => $file_size,
        ]);
    }
}

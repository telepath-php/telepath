<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a video file of a specific quality.
 */
class VideoQuality extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Video width */
    public int $width;

    /** Video height */
    public int $height;

    /** Codec that was used to encode the video, for example, “h264”, “h265”, or “av01” */
    public string $codec;

    /** <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /**
     * @param  string  $file_id  Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id  Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  int  $width  Video width
     * @param  int  $height  Video height
     * @param  string  $codec  Codec that was used to encode the video, for example, “h264”, “h265”, or “av01”
     * @param  int  $file_size  <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        string $codec,
        ?int $file_size = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'width' => $width,
            'height' => $height,
            'codec' => $codec,
            'file_size' => $file_size,
        ]);
    }
}

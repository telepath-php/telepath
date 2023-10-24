<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 */
class Animation extends Type
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

    /** <em>Optional</em>. Animation thumbnail as defined by sender */
    public ?PhotoSize $thumbnail = null;

    /** <em>Optional</em>. Original animation filename as defined by sender */
    public ?string $file_name = null;

    /** <em>Optional</em>. MIME type of the file as defined by sender */
    public ?string $mime_type = null;

    /** <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /**
     * @param  string  $file_id Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  int  $width Video width as defined by sender
     * @param  int  $height Video height as defined by sender
     * @param  int  $duration Duration of the video in seconds as defined by sender
     * @param  PhotoSize  $thumbnail <em>Optional</em>. Animation thumbnail as defined by sender
     * @param  string  $file_name <em>Optional</em>. Original animation filename as defined by sender
     * @param  string  $mime_type <em>Optional</em>. MIME type of the file as defined by sender
     * @param  int  $file_size <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int $duration,
        PhotoSize $thumbnail = null,
        string $file_name = null,
        string $mime_type = null,
        int $file_size = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
            'thumbnail' => $thumbnail,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
        ]);
    }
}

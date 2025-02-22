<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a video file.
 */
class Video extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Video width as defined by the sender */
    public int $width;

    /** Video height as defined by the sender */
    public int $height;

    /** Duration of the video in seconds as defined by the sender */
    public int $duration;

    /** <em>Optional</em>. Video thumbnail */
    public ?PhotoSize $thumbnail = null;

    /**
     * <em>Optional</em>. Available sizes of the cover of the video in the message
     *
     * @var PhotoSize[]
     */
    public ?array $cover = null;

    /** <em>Optional</em>. Timestamp in seconds from which the video will play in the message */
    public ?int $start_timestamp = null;

    /** <em>Optional</em>. Original filename as defined by the sender */
    public ?string $file_name = null;

    /** <em>Optional</em>. MIME type of the file as defined by the sender */
    public ?string $mime_type = null;

    /** <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /**
     * @param  string  $file_id  Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id  Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  int  $width  Video width as defined by the sender
     * @param  int  $height  Video height as defined by the sender
     * @param  int  $duration  Duration of the video in seconds as defined by the sender
     * @param  PhotoSize  $thumbnail  <em>Optional</em>. Video thumbnail
     * @param  PhotoSize[]  $cover  <em>Optional</em>. Available sizes of the cover of the video in the message
     * @param  int  $start_timestamp  <em>Optional</em>. Timestamp in seconds from which the video will play in the message
     * @param  string  $file_name  <em>Optional</em>. Original filename as defined by the sender
     * @param  string  $mime_type  <em>Optional</em>. MIME type of the file as defined by the sender
     * @param  int  $file_size  <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        int $duration,
        ?PhotoSize $thumbnail = null,
        ?array $cover = null,
        ?int $start_timestamp = null,
        ?string $file_name = null,
        ?string $mime_type = null,
        ?int $file_size = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
            'thumbnail' => $thumbnail,
            'cover' => $cover,
            'start_timestamp' => $start_timestamp,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
        ]);
    }
}

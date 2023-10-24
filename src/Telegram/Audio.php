<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Duration of the audio in seconds as defined by sender */
    public int $duration;

    /** <em>Optional</em>. Performer of the audio as defined by sender or by audio tags */
    public ?string $performer = null;

    /** <em>Optional</em>. Title of the audio as defined by sender or by audio tags */
    public ?string $title = null;

    /** <em>Optional</em>. Original filename as defined by sender */
    public ?string $file_name = null;

    /** <em>Optional</em>. MIME type of the file as defined by sender */
    public ?string $mime_type = null;

    /** <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /** <em>Optional</em>. Thumbnail of the album cover to which the music file belongs */
    public ?PhotoSize $thumbnail = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $duration Duration of the audio in seconds as defined by sender
     * @param string $performer <em>Optional</em>. Performer of the audio as defined by sender or by audio tags
     * @param string $title <em>Optional</em>. Title of the audio as defined by sender or by audio tags
     * @param string $file_name <em>Optional</em>. Original filename as defined by sender
     * @param string $mime_type <em>Optional</em>. MIME type of the file as defined by sender
     * @param int $file_size <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     * @param PhotoSize $thumbnail <em>Optional</em>. Thumbnail of the album cover to which the music file belongs
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $duration,
        ?string $performer = null,
        ?string $title = null,
        ?string $file_name = null,
        ?string $mime_type = null,
        ?int $file_size = null,
        ?PhotoSize $thumbnail = null,
    ): static
    {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'duration' => $duration,
            'performer' => $performer,
            'title' => $title,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
            'thumbnail' => $thumbnail,
        ]);
    }
}

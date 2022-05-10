<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio extends \Tii\Telepath\Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Duration of the audio in seconds as defined by sender */
    public int $duration;

    /** Optional. Performer of the audio as defined by sender or by audio tags */
    public ?string $performer = null;

    /** Optional. Title of the audio as defined by sender or by audio tags */
    public ?string $title = null;

    /** Optional. Original filename as defined by sender */
    public ?string $file_name = null;

    /** Optional. MIME type of the file as defined by sender */
    public ?string $mime_type = null;

    /** Optional. File size in bytes */
    public ?int $file_size = null;

    /** Optional. Thumbnail of the album cover to which the music file belongs */
    public ?PhotoSize $thumb = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $duration Duration of the audio in seconds as defined by sender
     * @param string $performer Optional. Performer of the audio as defined by sender or by audio tags
     * @param string $title Optional. Title of the audio as defined by sender or by audio tags
     * @param string $file_name Optional. Original filename as defined by sender
     * @param string $mime_type Optional. MIME type of the file as defined by sender
     * @param int $file_size Optional. File size in bytes
     * @param PhotoSize $thumb Optional. Thumbnail of the album cover to which the music file belongs
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
        ?PhotoSize $thumb = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'duration' => $duration,
            'performer' => $performer,
            'title' => $title,
            'file_name' => $file_name,
            'mime_type' => $mime_type,
            'file_size' => $file_size,
            'thumb' => $thumb,
        ]);
    }
}

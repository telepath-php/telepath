<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 */
class File extends \Tii\Telepath\Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Optional. File size in bytes, if known */
    public ?int $file_size = null;

    /** Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file. */
    public ?string $file_path = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $file_size Optional. File size in bytes, if known
     * @param string $file_path Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        ?int $file_size = null,
        ?string $file_path = null
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'file_size' => $file_size,
            'file_path' => $file_path,
        ]);
    }
}

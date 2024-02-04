<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Extensions\FileExtension;
use Telepath\Types\Type;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 */
class File extends Type
{
    use FileExtension;

    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value. */
    public ?int $file_size = null;

    /** <em>Optional</em>. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file. */
    public ?string $file_path = null;

    /**
     * @param  string  $file_id  Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id  Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  int  $file_size  <em>Optional</em>. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     * @param  string  $file_path  <em>Optional</em>. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        ?int $file_size = null,
        ?string $file_path = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'file_size' => $file_size,
            'file_path' => $file_path,
        ]);
    }
}

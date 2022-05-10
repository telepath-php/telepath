<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** File size in bytes */
    public int $file_size;

    /** Unix time when the file was uploaded */
    public int $file_date;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $file_size File size in bytes
     * @param int $file_date Unix time when the file was uploaded
     */
    public static function make(string $file_id, string $file_unique_id, int $file_size, int $file_date): static
    {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'file_size' => $file_size,
            'file_date' => $file_date,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Photo width */
    public int $width;

    /** Photo height */
    public int $height;

    /** <em>Optional</em>. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param string $file_id Identifier for this file, which can be used to download or reuse the file
     * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int $width Photo width
     * @param int $height Photo height
     * @param int $file_size <em>Optional</em>. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        int $width,
        int $height,
        ?int $file_size = null,
    ): static
    {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'width' => $width,
            'height' => $height,
            'file_size' => $file_size,
        ]);
    }
}

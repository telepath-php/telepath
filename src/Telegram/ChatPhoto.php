<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a chat photo.
 */
class ChatPhoto extends Type
{
    /** File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed. */
    public string $small_file_id;

    /** Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $small_file_unique_id;

    /** File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed. */
    public string $big_file_id;

    /** Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $big_file_unique_id;

    /**
     * @param string $small_file_id File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string $small_file_unique_id Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string $big_file_id File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string $big_file_unique_id Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public static function make(
        string $small_file_id,
        string $small_file_unique_id,
        string $big_file_id,
        string $big_file_unique_id,
    ): static
    {
        return new static([
            'small_file_id' => $small_file_id,
            'small_file_unique_id' => $small_file_unique_id,
            'big_file_id' => $big_file_id,
            'big_file_unique_id' => $big_file_unique_id,
        ]);
    }
}

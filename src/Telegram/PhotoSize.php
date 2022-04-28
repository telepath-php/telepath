<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize extends \Tii\Telepath\Type
{
	/** Identifier for this file, which can be used to download or reuse the file */
	public string $file_id;

	/** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $file_unique_id;

	/** Photo width */
	public int $width;

	/** Photo height */
	public int $height;

	/** Optional. File size in bytes */
	public ?int $file_size;
}

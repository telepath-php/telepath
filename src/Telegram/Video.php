<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a video file.
 */
class Video extends \Tii\Telepath\Type
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

	/** Optional. Video thumbnail */
	public ?PhotoSize $thumb;

	/** Optional. Original filename as defined by sender */
	public ?string $file_name;

	/** Optional. Mime type of a file as defined by sender */
	public ?string $mime_type;

	/** Optional. File size in bytes */
	public ?int $file_size;
}

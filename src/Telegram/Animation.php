<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 */
class Animation extends \Tii\Telepath\Type
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

	/** Optional. Animation thumbnail as defined by sender */
	public PhotoSize $thumb;

	/** Optional. Original animation filename as defined by sender */
	public string $file_name;

	/** Optional. MIME type of the file as defined by sender */
	public string $mime_type;

	/** Optional. File size in bytes */
	public int $file_size;
}

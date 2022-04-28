<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends \Tii\Telepath\Type
{
	/** Identifier for this file, which can be used to download or reuse the file */
	public string $file_id;

	/** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $file_unique_id;

	/** Optional. Document thumbnail as defined by sender */
	public ?PhotoSize $thumb;

	/** Optional. Original filename as defined by sender */
	public ?string $file_name;

	/** Optional. MIME type of the file as defined by sender */
	public ?string $mime_type;

	/** Optional. File size in bytes */
	public ?int $file_size;
}

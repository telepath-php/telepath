<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 */
class InputMediaAnimation extends InputMedia
{
	/** Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files » */
	public InputFile|string|null $thumb = null;

	/** Optional. Animation width */
	public ?int $width = null;

	/** Optional. Animation height */
	public ?int $height = null;

	/** Optional. Animation duration in seconds */
	public ?int $duration = null;


	/**
	 * @param InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
	 * @param int $width Optional. Animation width
	 * @param int $height Optional. Animation height
	 * @param int $duration Optional. Animation duration in seconds
	 */
	public static function make(
		InputFile|string|null $thumb = null,
		?int $width = null,
		?int $height = null,
		?int $duration = null
	): static {
		return new static([
		    'thumb' => $thumb,
		    'width' => $width,
		    'height' => $height,
		    'duration' => $duration,
		]);
	}
}

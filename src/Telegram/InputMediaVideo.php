<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a video to be sent.
 */
class InputMediaVideo extends InputMedia
{
	/** Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files » */
	public \Tii\Telepath\InputFile|string|null $thumb = null;

	/** Optional. Video width */
	public ?int $width = null;

	/** Optional. Video height */
	public ?int $height = null;

	/** Optional. Video duration in seconds */
	public ?int $duration = null;

	/** Optional. Pass True, if the uploaded video is suitable for streaming */
	public ?bool $supports_streaming = null;


	/**
	 * @param \Tii\Telepath\InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
	 * @param int $width Optional. Video width
	 * @param int $height Optional. Video height
	 * @param int $duration Optional. Video duration in seconds
	 * @param bool $supports_streaming Optional. Pass True, if the uploaded video is suitable for streaming
	 */
	public static function make(
		\Tii\Telepath\InputFile|string|null $thumb = null,
		?int $width = null,
		?int $height = null,
		?int $duration = null,
		?bool $supports_streaming = null
	): static {
		return new static([
		    'thumb' => $thumb,
		    'width' => $width,
		    'height' => $height,
		    'duration' => $duration,
		    'supports_streaming' => $supports_streaming,
		]);
	}
}

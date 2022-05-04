<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an audio file to be treated as music to be sent.
 */
class InputMediaAudio extends InputMedia
{
	/** Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files » */
	public \Tii\Telepath\InputFile|string|null $thumb = null;

	/** Optional. Duration of the audio in seconds */
	public ?int $duration = null;

	/** Optional. Performer of the audio */
	public ?string $performer = null;

	/** Optional. Title of the audio */
	public ?string $title = null;


	/**
	 * @param \Tii\Telepath\InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
	 * @param int $duration Optional. Duration of the audio in seconds
	 * @param string $performer Optional. Performer of the audio
	 * @param string $title Optional. Title of the audio
	 */
	public static function make(
		\Tii\Telepath\InputFile|string|null $thumb = null,
		?int $duration = null,
		?string $performer = null,
		?string $title = null
	): static {
		return new static([
		    'thumb' => $thumb,
		    'duration' => $duration,
		    'performer' => $performer,
		    'title' => $title,
		]);
	}
}

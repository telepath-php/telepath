<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the content of a media message to be sent. It should be one of
 */
abstract class InputMedia extends \Tii\Telepath\Type
{
	/** Type of the result */
	public string $type;

	/** File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files » */
	public string $media;

	/** Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing */
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the animation caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;


	/**
	 * @param string $type Type of the result
	 * @param string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
	 * @param string $caption Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 */
	public static function make(
		string $type,
		string $media,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null
	): static {
		return new static([
		    'type' => $type,
		    'media' => $media,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		]);
	}
}

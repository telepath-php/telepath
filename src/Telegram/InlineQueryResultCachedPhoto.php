<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a photo stored on the Telegram servers. By default, this photo will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultCachedPhoto extends InlineQueryResult
{
	/** A valid file identifier of the photo */
	public string $photo_file_id;

	/** Optional. Title for the result */
	public ?string $title = null;

	/** Optional. Short description of the result */
	public ?string $description = null;

	/** Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing */
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the photo caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;

	/** Optional. Content of the message to be sent instead of the photo */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $photo_file_id A valid file identifier of the photo
	 * @param string $title Optional. Title for the result
	 * @param string $description Optional. Short description of the result
	 * @param string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the photo
	 */
	public static function make(
		string $photo_file_id,
		?string $title = null,
		?string $description = null,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'photo_file_id' => $photo_file_id,
		    'title' => $title,
		    'description' => $description,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'input_message_content' => $input_message_content,
		]);
	}
}

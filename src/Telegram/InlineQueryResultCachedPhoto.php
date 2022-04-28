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
	public string $title;

	/** Optional. Short description of the result */
	public string $description;

	/** Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing */
	public string $caption;

	/** Optional. Mode for parsing entities in the photo caption. See formatting options for more details. */
	public string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public array $caption_entities;

	/** Optional. Content of the message to be sent instead of the photo */
	public InputMessageContent $input_message_content;
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the voice message.
 */
class InlineQueryResultCachedVoice extends InlineQueryResult
{
	/** A valid file identifier for the voice message */
	public string $voice_file_id;

	/** Voice message title */
	public string $title;

	/** Optional. Caption, 0-1024 characters after entities parsing */
	public string $caption;

	/** Optional. Mode for parsing entities in the voice message caption. See formatting options for more details. */
	public string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public array $caption_entities;

	/** Optional. Content of the message to be sent instead of the voice message */
	public InputMessageContent $input_message_content;
}

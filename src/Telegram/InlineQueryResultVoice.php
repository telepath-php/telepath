<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 */
class InlineQueryResultVoice extends InlineQueryResult
{
	/** A valid URL for the voice recording */
	public string $voice_url;

	/** Recording title */
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

	/** Optional. Recording duration in seconds */
	public int $voice_duration;

	/** Optional. Content of the message to be sent instead of the voice recording */
	public InputMessageContent $input_message_content;
}

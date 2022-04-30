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
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the voice message caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;

	/** Optional. Recording duration in seconds */
	public ?int $voice_duration = null;

	/** Optional. Content of the message to be sent instead of the voice recording */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $voice_url A valid URL for the voice recording
	 * @param string $title Recording title
	 * @param string $caption Optional. Caption, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param int $voice_duration Optional. Recording duration in seconds
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the voice recording
	 */
	public static function make(
		string $voice_url,
		string $title,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?int $voice_duration = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'voice_url' => $voice_url,
		    'title' => $title,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'voice_duration' => $voice_duration,
		    'input_message_content' => $input_message_content,
		]);
	}
}

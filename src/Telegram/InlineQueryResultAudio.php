<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultAudio extends InlineQueryResult
{
	/** A valid URL for the audio file */
	public string $audio_url;

	/** Title */
	public string $title;

	/** Optional. Caption, 0-1024 characters after entities parsing */
	public ?string $caption;

	/** Optional. Mode for parsing entities in the audio caption. See formatting options for more details. */
	public ?string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities;

	/** Optional. Performer */
	public ?string $performer;

	/** Optional. Audio duration in seconds */
	public ?int $audio_duration;

	/** Optional. Content of the message to be sent instead of the audio */
	public ?InputMessageContent $input_message_content;
}

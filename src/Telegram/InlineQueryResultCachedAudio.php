<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultCachedAudio extends InlineQueryResult
{
	/** A valid file identifier for the audio file */
	public string $audio_file_id;

	/** Optional. Caption, 0-1024 characters after entities parsing */
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the audio caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;

	/** Optional. Content of the message to be sent instead of the audio */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $audio_file_id A valid file identifier for the audio file
	 * @param string $caption Optional. Caption, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the audio
	 */
	public static function make(
		string $audio_file_id,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'audio_file_id' => $audio_file_id,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'input_message_content' => $input_message_content,
		]);
	}
}

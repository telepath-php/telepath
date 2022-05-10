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
	/** Type of the result, must be voice */
	public string $type = 'voice';

	/** A valid file identifier for the voice message */
	public string $voice_file_id;

	/** Voice message title */
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

	/** Optional. Content of the message to be sent instead of the voice message */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $id Unique identifier for this result, 1-64 bytes
	 * @param string $voice_file_id A valid file identifier for the voice message
	 * @param string $title Voice message title
	 * @param string $caption Optional. Caption, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the voice message
	 */
	public static function make(
		string $id,
		string $voice_file_id,
		string $title,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?InlineKeyboardMarkup $reply_markup = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'id' => $id,
		    'voice_file_id' => $voice_file_id,
		    'title' => $title,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'reply_markup' => $reply_markup,
		    'input_message_content' => $input_message_content,
		]);
	}
}

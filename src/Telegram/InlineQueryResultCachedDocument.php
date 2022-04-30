<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
{
	/** Title for the result */
	public string $title;

	/** A valid file identifier for the file */
	public string $document_file_id;

	/** Optional. Short description of the result */
	public ?string $description = null;

	/** Optional. Caption of the document to be sent, 0-1024 characters after entities parsing */
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the document caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;

	/** Optional. Content of the message to be sent instead of the file */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $title Title for the result
	 * @param string $document_file_id A valid file identifier for the file
	 * @param string $description Optional. Short description of the result
	 * @param string $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the document caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the file
	 */
	public static function make(
		string $title,
		string $document_file_id,
		?string $description = null,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'title' => $title,
		    'document_file_id' => $document_file_id,
		    'description' => $description,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'input_message_content' => $input_message_content,
		]);
	}
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to an animated GIF file stored on the Telegram servers. By default, this animated GIF file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with specified content instead of the animation.
 */
class InlineQueryResultCachedGif extends InlineQueryResult
{
	/** A valid file identifier for the GIF file */
	public string $gif_file_id;

	/** Optional. Title for the result */
	public ?string $title;

	/** Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing */
	public ?string $caption;

	/** Optional. Mode for parsing entities in the caption. See formatting options for more details. */
	public ?string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities;

	/** Optional. Content of the message to be sent instead of the GIF animation */
	public ?InputMessageContent $input_message_content;
}

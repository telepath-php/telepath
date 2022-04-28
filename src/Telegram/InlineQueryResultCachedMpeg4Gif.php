<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
	/** A valid file identifier for the MP4 file */
	public string $mpeg4_file_id;

	/** Optional. Title for the result */
	public ?string $title;

	/** Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
	public ?string $caption;

	/** Optional. Mode for parsing entities in the caption. See formatting options for more details. */
	public ?string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities;

	/** Optional. Content of the message to be sent instead of the video animation */
	public ?InputMessageContent $input_message_content;
}

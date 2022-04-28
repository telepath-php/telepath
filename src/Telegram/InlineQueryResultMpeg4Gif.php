<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
	/** A valid URL for the MP4 file. File size must not exceed 1MB */
	public string $mpeg4_url;

	/** Optional. Video width */
	public ?int $mpeg4_width;

	/** Optional. Video height */
	public ?int $mpeg4_height;

	/** Optional. Video duration in seconds */
	public ?int $mpeg4_duration;

	/** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
	public string $thumb_url;

	/** Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
	public ?string $thumb_mime_type;

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

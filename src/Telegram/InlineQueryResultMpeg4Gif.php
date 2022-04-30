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
	public ?int $mpeg4_width = null;

	/** Optional. Video height */
	public ?int $mpeg4_height = null;

	/** Optional. Video duration in seconds */
	public ?int $mpeg4_duration = null;

	/** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
	public string $thumb_url;

	/** Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
	public ?string $thumb_mime_type = null;

	/** Optional. Title for the result */
	public ?string $title = null;

	/** Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
	public ?string $caption = null;

	/** Optional. Mode for parsing entities in the caption. See formatting options for more details. */
	public ?string $parse_mode = null;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public ?array $caption_entities = null;

	/** Optional. Content of the message to be sent instead of the video animation */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $mpeg4_url A valid URL for the MP4 file. File size must not exceed 1MB
	 * @param int $mpeg4_width Optional. Video width
	 * @param int $mpeg4_height Optional. Video height
	 * @param int $mpeg4_duration Optional. Video duration in seconds
	 * @param string $thumb_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
	 * @param string $thumb_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
	 * @param string $title Optional. Title for the result
	 * @param string $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
	 * @param string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
	 * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video animation
	 */
	public static function make(
		string $mpeg4_url,
		?int $mpeg4_width = null,
		?int $mpeg4_height = null,
		?int $mpeg4_duration = null,
		string $thumb_url,
		?string $thumb_mime_type = null,
		?string $title = null,
		?string $caption = null,
		?string $parse_mode = null,
		?array $caption_entities = null,
		?InputMessageContent $input_message_content = null
	): static {
		return new static([
		    'mpeg4_url' => $mpeg4_url,
		    'mpeg4_width' => $mpeg4_width,
		    'mpeg4_height' => $mpeg4_height,
		    'mpeg4_duration' => $mpeg4_duration,
		    'thumb_url' => $thumb_url,
		    'thumb_mime_type' => $thumb_mime_type,
		    'title' => $title,
		    'caption' => $caption,
		    'parse_mode' => $parse_mode,
		    'caption_entities' => $caption_entities,
		    'input_message_content' => $input_message_content,
		]);
	}
}

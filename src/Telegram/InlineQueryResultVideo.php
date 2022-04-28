<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo extends InlineQueryResult
{
	/** A valid URL for the embedded video player or video file */
	public string $video_url;

	/** Mime type of the content of video url, “text/html” or “video/mp4” */
	public string $mime_type;

	/** URL of the thumbnail (JPEG only) for the video */
	public string $thumb_url;

	/** Title for the result */
	public string $title;

	/** Optional. Caption of the video to be sent, 0-1024 characters after entities parsing */
	public string $caption;

	/** Optional. Mode for parsing entities in the video caption. See formatting options for more details. */
	public string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
	 * @var MessageEntity[]
	 */
	public array $caption_entities;

	/** Optional. Video width */
	public int $video_width;

	/** Optional. Video height */
	public int $video_height;

	/** Optional. Video duration in seconds */
	public int $video_duration;

	/** Optional. Short description of the result */
	public string $description;

	/** Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video). */
	public InputMessageContent $input_message_content;
}

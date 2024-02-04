<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    /** Type of the result, must be <em>video</em> */
    public string $type = 'video';

    /** A valid URL for the embedded video player or video file */
    public string $video_url;

    /** MIME type of the content of the video URL, “text/html” or “video/mp4” */
    public string $mime_type;

    /** URL of the thumbnail (JPEG only) for the video */
    public string $thumbnail_url;

    /** Title for the result */
    public string $title;

    /** <em>Optional</em>. Caption of the video to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Video width */
    public ?int $video_width = null;

    /** <em>Optional</em>. Video height */
    public ?int $video_height = null;

    /** <em>Optional</em>. Video duration in seconds */
    public ?int $video_duration = null;

    /** <em>Optional</em>. Short description of the result */
    public ?string $description = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video). */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 bytes
     * @param  string  $video_url  A valid URL for the embedded video player or video file
     * @param  string  $mime_type  MIME type of the content of the video URL, “text/html” or “video/mp4”
     * @param  string  $thumbnail_url  URL of the thumbnail (JPEG only) for the video
     * @param  string  $title  Title for the result
     * @param  string  $caption  <em>Optional</em>. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int  $video_width  <em>Optional</em>. Video width
     * @param  int  $video_height  <em>Optional</em>. Video height
     * @param  int  $video_duration  <em>Optional</em>. Video duration in seconds
     * @param  string  $description  <em>Optional</em>. Short description of the result
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    public static function make(
        string $id,
        string $video_url,
        string $mime_type,
        string $thumbnail_url,
        string $title,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $video_width = null,
        ?int $video_height = null,
        ?int $video_duration = null,
        ?string $description = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'video_url' => $video_url,
            'mime_type' => $mime_type,
            'thumbnail_url' => $thumbnail_url,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'video_width' => $video_width,
            'video_height' => $video_height,
            'video_duration' => $video_duration,
            'description' => $description,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}

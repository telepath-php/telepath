<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /** Type of the result, must be <em>mpeg4_gif</em> */
    public string $type = 'mpeg4_gif';

    /** A valid URL for the MPEG4 file. File size must not exceed 1MB */
    public string $mpeg4_url;

    /** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
    public string $thumbnail_url;

    /** <em>Optional</em>. Video width */
    public ?int $mpeg4_width = null;

    /** <em>Optional</em>. Video height */
    public ?int $mpeg4_height = null;

    /** <em>Optional</em>. Video duration in seconds */
    public ?int $mpeg4_duration = null;

    /** <em>Optional</em>. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
    public ?string $thumbnail_mime_type = null;

    /** <em>Optional</em>. Title for the result */
    public ?string $title = null;

    /** <em>Optional</em>. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the video animation */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 bytes
     * @param  string  $mpeg4_url  A valid URL for the MPEG4 file. File size must not exceed 1MB
     * @param  string  $thumbnail_url  URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param  int  $mpeg4_width  <em>Optional</em>. Video width
     * @param  int  $mpeg4_height  <em>Optional</em>. Video height
     * @param  int  $mpeg4_duration  <em>Optional</em>. Video duration in seconds
     * @param  string  $thumbnail_mime_type  <em>Optional</em>. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param  string  $title  <em>Optional</em>. Title for the result
     * @param  string  $caption  <em>Optional</em>. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the video animation
     */
    public static function make(
        string $id,
        string $mpeg4_url,
        string $thumbnail_url,
        ?int $mpeg4_width = null,
        ?int $mpeg4_height = null,
        ?int $mpeg4_duration = null,
        ?string $thumbnail_mime_type = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'mpeg4_url' => $mpeg4_url,
            'thumbnail_url' => $thumbnail_url,
            'mpeg4_width' => $mpeg4_width,
            'mpeg4_height' => $mpeg4_height,
            'mpeg4_duration' => $mpeg4_duration,
            'thumbnail_mime_type' => $thumbnail_mime_type,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}

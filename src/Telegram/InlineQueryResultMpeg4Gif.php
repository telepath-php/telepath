<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /** Type of the result, must be mpeg4_gif */
    public string $type = 'mpeg4_gif';

    /** A valid URL for the MPEG4 file. File size must not exceed 1MB */
    public string $mpeg4_url;

    /** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
    public string $thumb_url;

    /** Optional. Video width */
    public ?int $mpeg4_width = null;

    /** Optional. Video height */
    public ?int $mpeg4_height = null;

    /** Optional. Video duration in seconds */
    public ?int $mpeg4_duration = null;

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
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $mpeg4_url A valid URL for the MPEG4 file. File size must not exceed 1MB
     * @param string $thumb_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param int $mpeg4_width Optional. Video width
     * @param int $mpeg4_height Optional. Video height
     * @param int $mpeg4_duration Optional. Video duration in seconds
     * @param string $thumb_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param string $title Optional. Title for the result
     * @param string $caption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video animation
     */
    public static function make(
        string $id,
        string $mpeg4_url,
        string $thumb_url,
        ?int $mpeg4_width = null,
        ?int $mpeg4_height = null,
        ?int $mpeg4_duration = null,
        ?string $thumb_mime_type = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null
    ): static {
        return new static([
            'id' => $id,
            'mpeg4_url' => $mpeg4_url,
            'thumb_url' => $thumb_url,
            'mpeg4_width' => $mpeg4_width,
            'mpeg4_height' => $mpeg4_height,
            'mpeg4_duration' => $mpeg4_duration,
            'thumb_mime_type' => $thumb_mime_type,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}

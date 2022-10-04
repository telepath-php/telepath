<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif extends InlineQueryResult
{
    /** Type of the result, must be gif */
    public string $type = 'gif';

    /** A valid URL for the GIF file. File size must not exceed 1MB */
    public string $gif_url;

    /** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
    public string $thumb_url;

    /** Optional. Width of the GIF */
    public ?int $gif_width = null;

    /** Optional. Height of the GIF */
    public ?int $gif_height = null;

    /** Optional. Duration of the GIF in seconds */
    public ?int $gif_duration = null;

    /** Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
    public ?string $thumb_mime_type = null;

    /** Optional. Title for the result */
    public ?string $title = null;

    /** Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. Content of the message to be sent instead of the GIF animation */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $gif_url A valid URL for the GIF file. File size must not exceed 1MB
     * @param string $thumb_url URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param int $gif_width Optional. Width of the GIF
     * @param int $gif_height Optional. Height of the GIF
     * @param int $gif_duration Optional. Duration of the GIF in seconds
     * @param string $thumb_mime_type Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param string $title Optional. Title for the result
     * @param string $caption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the GIF animation
     */
    public static function make(
        string $id,
        string $gif_url,
        string $thumb_url,
        ?int $gif_width = null,
        ?int $gif_height = null,
        ?int $gif_duration = null,
        ?string $thumb_mime_type = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'gif_url' => $gif_url,
            'thumb_url' => $thumb_url,
            'gif_width' => $gif_width,
            'gif_height' => $gif_height,
            'gif_duration' => $gif_duration,
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

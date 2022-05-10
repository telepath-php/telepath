<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    /** Type of the result, must be photo */
    public string $type = 'photo';

    /** A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB */
    public string $photo_url;

    /** URL of the thumbnail for the photo */
    public string $thumb_url;

    /** Optional. Width of the photo */
    public ?int $photo_width = null;

    /** Optional. Height of the photo */
    public ?int $photo_height = null;

    /** Optional. Title for the result */
    public ?string $title = null;

    /** Optional. Short description of the result */
    public ?string $description = null;

    /** Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the photo caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. Content of the message to be sent instead of the photo */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $photo_url A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     * @param string $thumb_url URL of the thumbnail for the photo
     * @param int $photo_width Optional. Width of the photo
     * @param int $photo_height Optional. Height of the photo
     * @param string $title Optional. Title for the result
     * @param string $description Optional. Short description of the result
     * @param string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the photo
     */
    public static function make(
        string $id,
        string $photo_url,
        string $thumb_url,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?string $title = null,
        ?string $description = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null
    ): static {
        return new static([
            'id' => $id,
            'photo_url' => $photo_url,
            'thumb_url' => $thumb_url,
            'photo_width' => $photo_width,
            'photo_height' => $photo_height,
            'title' => $title,
            'description' => $description,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}

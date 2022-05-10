<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument extends InlineQueryResult
{
    /** Type of the result, must be document */
    public string $type = 'document';

    /** Title for the result */
    public string $title;

    /** A valid URL for the file */
    public string $document_url;

    /** Mime type of the content of the file, either “application/pdf” or “application/zip” */
    public string $mime_type;

    /** Optional. Caption of the document to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the document caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. Short description of the result */
    public ?string $description = null;

    /** Optional. Content of the message to be sent instead of the file */
    public ?InputMessageContent $input_message_content = null;

    /** Optional. URL of the thumbnail (JPEG only) for the file */
    public ?string $thumb_url = null;

    /** Optional. Thumbnail width */
    public ?int $thumb_width = null;

    /** Optional. Thumbnail height */
    public ?int $thumb_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $title Title for the result
     * @param string $document_url A valid URL for the file
     * @param string $mime_type Mime type of the content of the file, either “application/pdf” or “application/zip”
     * @param string $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string $description Optional. Short description of the result
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the file
     * @param string $thumb_url Optional. URL of the thumbnail (JPEG only) for the file
     * @param int $thumb_width Optional. Thumbnail width
     * @param int $thumb_height Optional. Thumbnail height
     */
    public static function make(
        string $id,
        string $title,
        string $document_url,
        string $mime_type,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?string $description = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
        ?string $thumb_url = null,
        ?int $thumb_width = null,
        ?int $thumb_height = null
    ): static {
        return new static([
            'id' => $id,
            'title' => $title,
            'document_url' => $document_url,
            'mime_type' => $mime_type,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'description' => $description,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
            'thumb_url' => $thumb_url,
            'thumb_width' => $thumb_width,
            'thumb_height' => $thumb_height,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    /** Type of the result, must be article */
    public string $type = 'article';

    /** Title of the result */
    public string $title;

    /** Content of the message to be sent */
    public InputMessageContent $input_message_content;

    /** Optional. URL of the result */
    public ?string $url = null;

    /** Optional. Pass True if you don't want the URL to be shown in the message */
    public ?bool $hide_url = null;

    /** Optional. Short description of the result */
    public ?string $description = null;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** Optional. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** Optional. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param string $title Title of the result
     * @param InputMessageContent $input_message_content Content of the message to be sent
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param string $url Optional. URL of the result
     * @param bool $hide_url Optional. Pass True if you don't want the URL to be shown in the message
     * @param string $description Optional. Short description of the result
     * @param string $thumbnail_url Optional. Url of the thumbnail for the result
     * @param int $thumbnail_width Optional. Thumbnail width
     * @param int $thumbnail_height Optional. Thumbnail height
     */
    public static function make(
        string $id,
        string $title,
        InputMessageContent $input_message_content,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?string $url = null,
        ?bool $hide_url = null,
        ?string $description = null,
        ?string $thumbnail_url = null,
        ?int $thumbnail_width = null,
        ?int $thumbnail_height = null,
    ): static {
        return new static([
            'id' => $id,
            'title' => $title,
            'input_message_content' => $input_message_content,
            'reply_markup' => $reply_markup,
            'url' => $url,
            'hide_url' => $hide_url,
            'description' => $description,
            'thumbnail_url' => $thumbnail_url,
            'thumbnail_width' => $thumbnail_width,
            'thumbnail_height' => $thumbnail_height,
        ]);
    }
}

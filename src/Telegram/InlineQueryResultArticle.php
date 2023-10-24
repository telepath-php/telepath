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
    /** Type of the result, must be <em>article</em> */
    public string $type = 'article';

    /** Title of the result */
    public string $title;

    /** Content of the message to be sent */
    public InputMessageContent $input_message_content;

    /** <em>Optional</em>. URL of the result */
    public ?string $url = null;

    /** <em>Optional</em>. Pass <em>True</em> if you don't want the URL to be shown in the message */
    public ?bool $hide_url = null;

    /** <em>Optional</em>. Short description of the result */
    public ?string $description = null;

    /** <em>Optional</em>. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** <em>Optional</em>. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** <em>Optional</em>. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param string $title Title of the result
     * @param InputMessageContent $input_message_content Content of the message to be sent
     * @param InlineKeyboardMarkup $reply_markup <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param string $url <em>Optional</em>. URL of the result
     * @param bool $hide_url <em>Optional</em>. Pass <em>True</em> if you don't want the URL to be shown in the message
     * @param string $description <em>Optional</em>. Short description of the result
     * @param string $thumbnail_url <em>Optional</em>. Url of the thumbnail for the result
     * @param int $thumbnail_width <em>Optional</em>. Thumbnail width
     * @param int $thumbnail_height <em>Optional</em>. Thumbnail height
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
    ): static
    {
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

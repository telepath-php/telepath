<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultDocument extends InlineQueryResult
{
    public readonly string $type;

    public readonly string $id;

    public readonly string $title;

    public readonly string $caption;

    public readonly string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly string $document_url;

    public readonly string $mime_type;

    public readonly string $description;

    public readonly InlineKeyboardMarkup $reply_markup;

    public readonly InputMessageContent $input_message_content;

    public readonly string $thumb_url;

    public readonly int $thumb_width;

    public readonly int $thumb_height;
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultPhoto extends InlineQueryResult
{
    public readonly string $type;

    public readonly string $id;

    public readonly string $photo_url;

    public readonly string $thumb_url;

    public readonly int $photo_width;

    public readonly int $photo_height;

    public readonly string $title;

    public readonly string $description;

    public readonly string $caption;

    public readonly string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly InlineKeyboardMarkup $reply_markup;

    public readonly InputMessageContent $input_message_content;
}


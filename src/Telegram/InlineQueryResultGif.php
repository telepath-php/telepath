<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultGif extends InlineQueryResult
{
    public readonly string $type;

    public readonly string $id;

    public readonly string $gif_url;

    public readonly int $gif_width;

    public readonly int $gif_height;

    public readonly int $gif_duration;

    public readonly string $thumb_url;

    public readonly string $thumb_mime_type;

    public readonly string $title;

    public readonly string $caption;

    public readonly string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly InlineKeyboardMarkup $reply_markup;

    public readonly InputMessageContent $input_message_content;
}


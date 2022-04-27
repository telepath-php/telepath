<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultGif extends InlineQueryResult
{
    public string $type;

    public string $id;

    public string $gif_url;

    public int $gif_width;

    public int $gif_height;

    public int $gif_duration;

    public string $thumb_url;

    public string $thumb_mime_type;

    public string $title;

    public string $caption;

    public string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public array $caption_entities;

    public InlineKeyboardMarkup $reply_markup;

    public InputMessageContent $input_message_content;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


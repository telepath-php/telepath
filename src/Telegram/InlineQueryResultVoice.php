<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultVoice extends InlineQueryResult
{
    public readonly string $type;

    public readonly string $id;

    public readonly string $voice_url;

    public readonly string $title;

    public readonly string $caption;

    public readonly string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly int $voice_duration;

    public readonly InlineKeyboardMarkup $reply_markup;

    public readonly InputMessageContent $input_message_content;
}


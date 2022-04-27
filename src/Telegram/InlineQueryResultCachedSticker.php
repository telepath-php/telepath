<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultCachedSticker extends InlineQueryResult
{
    public string $type;

    public string $id;

    public string $sticker_file_id;

    public InlineKeyboardMarkup $reply_markup;

    public InputMessageContent $input_message_content;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


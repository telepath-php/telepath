<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultContact extends InlineQueryResult
{
    public string $type;

    public string $id;

    public string $phone_number;

    public string $first_name;

    public string $last_name;

    public string $vcard;

    public InlineKeyboardMarkup $reply_markup;

    public InputMessageContent $input_message_content;

    public string $thumb_url;

    public int $thumb_width;

    public int $thumb_height;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


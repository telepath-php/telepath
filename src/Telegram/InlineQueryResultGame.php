<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultGame extends InlineQueryResult
{
    public string $type;

    public string $id;

    public string $game_short_name;

    public InlineKeyboardMarkup $reply_markup;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQueryResultLocation extends InlineQueryResult
{
    public string $type;

    public string $id;

    public float $latitude;

    public float $longitude;

    public string $title;

    public float $horizontal_accuracy;

    public int $live_period;

    public int $heading;

    public int $proximity_alert_radius;

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


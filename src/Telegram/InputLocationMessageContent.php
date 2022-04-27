<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputLocationMessageContent extends InputMessageContent
{
    public float $latitude;

    public float $longitude;

    public float $horizontal_accuracy;

    public int $live_period;

    public int $heading;

    public int $proximity_alert_radius;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


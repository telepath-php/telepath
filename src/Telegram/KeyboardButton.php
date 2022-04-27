<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class KeyboardButton extends \Tii\Telepath\Type
{
    public string $text;

    public bool $request_contact;

    public bool $request_location;

    public KeyboardButtonPollType $request_poll;

    public WebAppInfo $web_app;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class MenuButtonWebApp extends MenuButton
{
    public string $type;

    public string $text;

    public WebAppInfo $web_app;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


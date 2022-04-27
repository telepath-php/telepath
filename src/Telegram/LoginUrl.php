<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class LoginUrl extends \Tii\Telepath\Type
{
    public string $url;

    public string $forward_text;

    public string $bot_username;

    public bool $request_write_access;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


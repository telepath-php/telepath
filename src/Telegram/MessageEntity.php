<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class MessageEntity extends \Tii\Telepath\Type
{
    public string $type;

    public int $offset;

    public int $length;

    public string $url;

    public User $user;

    public string $language;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


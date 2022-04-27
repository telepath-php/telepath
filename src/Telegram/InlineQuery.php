<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InlineQuery extends \Tii\Telepath\Type
{
    public string $id;

    public User $from;

    public string $query;

    public string $offset;

    public string $chat_type;

    public Location $location;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


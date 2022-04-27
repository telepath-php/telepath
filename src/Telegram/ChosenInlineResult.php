<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChosenInlineResult extends \Tii\Telepath\Type
{
    public string $result_id;

    public User $from;

    public Location $location;

    public string $inline_message_id;

    public string $query;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PollOption extends \Tii\Telepath\Type
{
    public string $text;

    public int $voter_count;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


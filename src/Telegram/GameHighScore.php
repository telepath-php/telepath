<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class GameHighScore extends \Tii\Telepath\Type
{
    public int $position;

    public User $user;

    public int $score;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


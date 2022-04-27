<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PollAnswer extends \Tii\Telepath\Type
{
    public string $poll_id;

    public User $user;

    /**
     * @var int[]
     */
    public array $option_ids;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


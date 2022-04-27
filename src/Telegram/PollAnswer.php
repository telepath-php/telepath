<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PollAnswer extends \Tii\Telepath\Type
{
    public readonly string $poll_id;

    public readonly User $user;

    /**
     * @var int[]
     */
    public readonly array $option_ids;
}


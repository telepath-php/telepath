<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Poll extends \Tii\Telepath\Type
{
    public readonly string $id;

    public readonly string $question;

    /**
     * @var PollOption[]
     */
    public readonly array $options;

    public readonly int $total_voter_count;

    public readonly bool $is_closed;

    public readonly bool $is_anonymous;

    public readonly string $type;

    public readonly bool $allows_multiple_answers;

    public readonly int $correct_option_id;

    public readonly string $explanation;

    /**
     * @var MessageEntity[]
     */
    public readonly array $explanation_entities;

    public readonly int $open_period;

    public readonly int $close_date;
}


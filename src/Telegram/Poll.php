<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Poll extends \Tii\Telepath\Type
{
    public string $id;

    public string $question;

    /**
     * @var PollOption[]
     */
    public array $options;

    public int $total_voter_count;

    public bool $is_closed;

    public bool $is_anonymous;

    public string $type;

    public bool $allows_multiple_answers;

    public int $correct_option_id;

    public string $explanation;

    /**
     * @var MessageEntity[]
     */
    public array $explanation_entities;

    public int $open_period;

    public int $close_date;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


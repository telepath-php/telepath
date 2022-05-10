<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends \Tii\Telepath\Types\Type
{
    /** Unique poll identifier */
    public string $poll_id;

    /** The user, who changed the answer to the poll */
    public User $user;

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     * @var int[]
     */
    public array $option_ids;

    /**
     * @param string $poll_id Unique poll identifier
     * @param User $user The user, who changed the answer to the poll
     * @param int[] $option_ids 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     */
    public static function make(string $poll_id, User $user, array $option_ids): static
    {
        return new static([
            'poll_id' => $poll_id,
            'user' => $user,
            'option_ids' => $option_ids,
        ]);
    }
}

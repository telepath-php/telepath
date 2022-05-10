<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption extends \Tii\Telepath\Type
{
    /** Option text, 1-100 characters */
    public string $text;

    /** Number of users that voted for this option */
    public int $voter_count;

    /**
     * @param string $text Option text, 1-100 characters
     * @param int $voter_count Number of users that voted for this option
     */
    public static function make(string $text, int $voter_count): static
    {
        return new static([
            'text' => $text,
            'voter_count' => $voter_count,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends Type
{
    /** Unique poll identifier */
    public string $poll_id;

    /**
     * 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     * @var int[]
     */
    public array $option_ids;

    /** <em>Optional</em>. The chat that changed the answer to the poll, if the voter is anonymous */
    public ?Chat $voter_chat = null;

    /** <em>Optional</em>. The user that changed the answer to the poll, if the voter isn't anonymous */
    public ?User $user = null;

    /**
     * @param string $poll_id Unique poll identifier
     * @param int[] $option_ids 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     * @param Chat $voter_chat <em>Optional</em>. The chat that changed the answer to the poll, if the voter is anonymous
     * @param User $user <em>Optional</em>. The user that changed the answer to the poll, if the voter isn't anonymous
     */
    public static function make(
        string $poll_id,
        array $option_ids,
        ?Chat $voter_chat = null,
        ?User $user = null,
    ): static
    {
        return new static([
            'poll_id' => $poll_id,
            'option_ids' => $option_ids,
            'voter_chat' => $voter_chat,
            'user' => $user,
        ]);
    }
}

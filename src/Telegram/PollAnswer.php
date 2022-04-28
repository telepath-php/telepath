<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends \Tii\Telepath\Type
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
}

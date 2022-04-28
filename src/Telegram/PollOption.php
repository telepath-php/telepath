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
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore extends \Tii\Telepath\Type
{
	/** Position in high score table for the game */
	public int $position;

	/** User */
	public User $user;

	/** Score */
	public int $score;
}

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


	/**
	 * @param int $position Position in high score table for the game
	 * @param User $user User
	 * @param int $score Score
	 */
	public static function make(int $position, User $user, int $score): static
	{
		return new static([
		    'position' => $position,
		    'user' => $user,
		    'score' => $score,
		]);
	}
}

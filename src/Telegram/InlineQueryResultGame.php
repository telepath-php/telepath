<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a Game.
 */
class InlineQueryResultGame extends InlineQueryResult
{
	/** Short name of the game */
	public string $game_short_name;


	/**
	 * @param string $game_short_name Short name of the game
	 */
	public static function make(string $game_short_name): static
	{
		return new static([
		    'game_short_name' => $game_short_name,
		]);
	}
}

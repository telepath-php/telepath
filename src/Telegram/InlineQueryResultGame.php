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
	/** Type of the result, must be game */
	public string $type = 'game';

	/** Short name of the game */
	public string $game_short_name;


	/**
	 * @param string $id Unique identifier for this result, 1-64 bytes
	 * @param string $game_short_name Short name of the game
	 * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
	 */
	public static function make(string $id, string $game_short_name, ?InlineKeyboardMarkup $reply_markup = null): static
	{
		return new static([
		    'id' => $id,
		    'game_short_name' => $game_short_name,
		    'reply_markup' => $reply_markup,
		]);
	}
}

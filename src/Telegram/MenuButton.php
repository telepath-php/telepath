<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 */
class MenuButton extends \Tii\Telepath\Type
{
	/** Type of the button */
	public string $type;


	/**
	 * @param string $type Type of the button
	 */
	public static function make(string $type): static
	{
		return new static([
		    'type' => $type,
		]);
	}
}

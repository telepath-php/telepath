<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup extends \Tii\Telepath\Type
{
	/**
	 * Array of button rows, each represented by an Array of InlineKeyboardButton objects
	 * @var InlineKeyboardButton[][]
	 */
	public array $inline_keyboard;


	/**
	 * @param InlineKeyboardButton[][] $inline_keyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects
	 */
	public static function make(array $inline_keyboard): static
	{
		return new static([
		    'inline_keyboard' => $inline_keyboard,
		]);
	}
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 */
abstract class BotCommandScope extends \Tii\Telepath\Type
{
	/** Scope type */
	public string $type;


	/**
	 * @param string $type Scope type
	 */
	public static function make(string $type): static
	{
		return new static([
		    'type' => $type,
		]);
	}
}

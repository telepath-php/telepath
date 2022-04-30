<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult extends \Tii\Telepath\Type
{
	/** The unique identifier for the result that was chosen */
	public string $result_id;

	/** The user that chose the result */
	public User $from;

	/** Optional. Sender location, only for bots that require user location */
	public ?Location $location = null;

	/** Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message. */
	public ?string $inline_message_id = null;

	/** The query that was used to obtain the result */
	public string $query;


	/**
	 * @param string $result_id The unique identifier for the result that was chosen
	 * @param User $from The user that chose the result
	 * @param Location $location Optional. Sender location, only for bots that require user location
	 * @param string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
	 * @param string $query The query that was used to obtain the result
	 */
	public static function make(
		string $result_id,
		User $from,
		?Location $location = null,
		?string $inline_message_id = null,
		string $query
	): static {
		return new static([
		    'result_id' => $result_id,
		    'from' => $from,
		    'location' => $location,
		    'inline_message_id' => $inline_message_id,
		    'query' => $query,
		]);
	}
}

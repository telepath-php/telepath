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
	public ?Location $location;

	/** Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message. */
	public ?string $inline_message_id;

	/** The query that was used to obtain the result */
	public string $query;
}

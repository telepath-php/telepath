<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 */
abstract class InlineQueryResult extends \Tii\Telepath\Type
{
	/** Type of the result */
	public string $type;

	/** Unique identifier for this result, 1-64 bytes */
	public string $id;

	/** Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkup $reply_markup = null;
}

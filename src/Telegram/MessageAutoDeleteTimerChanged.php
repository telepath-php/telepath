<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged extends \Tii\Telepath\Type
{
	/** New auto-delete time for messages in the chat; in seconds */
	public int $message_auto_delete_time;
}

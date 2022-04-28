<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 */
class CallbackQuery extends \Tii\Telepath\Type
{
	/** Unique identifier for this query */
	public string $id;

	/** Sender */
	public User $from;

	/** Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old */
	public ?Message $message;

	/** Optional. Identifier of the message sent via the bot in inline mode, that originated the query. */
	public ?string $inline_message_id;

	/** Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games. */
	public string $chat_instance;

	/** Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field. */
	public ?string $data;

	/** Optional. Short name of a Game to be returned, serves as the unique identifier for the game */
	public ?string $game_short_name;
}

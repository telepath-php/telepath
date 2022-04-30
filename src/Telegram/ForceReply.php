<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 */
class ForceReply extends \Tii\Telepath\Type
{
	/** Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply' */
	public bool $force_reply;

	/** Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters */
	public ?string $input_field_placeholder = null;

	/** Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message. */
	public ?bool $selective = null;


	/**
	 * @param bool $force_reply Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
	 * @param string $input_field_placeholder Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
	 * @param bool $selective Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
	 */
	public static function make(
		bool $force_reply,
		?string $input_field_placeholder = null,
		?bool $selective = null
	): static {
		return new static([
		    'force_reply' => $force_reply,
		    'input_field_placeholder' => $input_field_placeholder,
		    'selective' => $selective,
		]);
	}
}

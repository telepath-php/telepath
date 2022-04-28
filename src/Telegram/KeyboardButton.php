<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this object to specify text of the button. Optional fields web_app, request_contact, request_location, and request_poll are mutually exclusive.
 */
class KeyboardButton extends \Tii\Telepath\Type
{
	/** Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed */
	public string $text;

	/** Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only. */
	public ?bool $request_contact;

	/** Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only. */
	public ?bool $request_location;

	/** Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only. */
	public ?KeyboardButtonPollType $request_poll;

	/** Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only. */
	public ?WebAppInfo $web_app;
}

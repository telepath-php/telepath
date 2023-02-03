<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one button of the reply keyboard. For simple text buttons, String can be used instead of this object to specify the button text. The optional fields web_app, request_user, request_chat, request_contact, request_location, and request_poll are mutually exclusive.
 */
class KeyboardButton extends Type
{
    /** Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed */
    public string $text;

    /** Optional. If specified, pressing the button will open a list of suitable users. Tapping on any user will send their identifier to the bot in a “user_shared” service message. Available in private chats only. */
    public ?KeyboardButtonRequestUser $request_user = null;

    /** Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only. */
    public ?KeyboardButtonRequestChat $request_chat = null;

    /** Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only. */
    public ?bool $request_contact = null;

    /** Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only. */
    public ?bool $request_location = null;

    /** Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only. */
    public ?KeyboardButtonPollType $request_poll = null;

    /** Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only. */
    public ?WebAppInfo $web_app = null;

    /**
     * @param string $text Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     * @param KeyboardButtonRequestUser $request_user Optional. If specified, pressing the button will open a list of suitable users. Tapping on any user will send their identifier to the bot in a “user_shared” service message. Available in private chats only.
     * @param KeyboardButtonRequestChat $request_chat Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
     * @param bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     * @param bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
     * @param KeyboardButtonPollType $request_poll Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     * @param WebAppInfo $web_app Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     */
    public static function make(
        string $text,
        ?KeyboardButtonRequestUser $request_user = null,
        ?KeyboardButtonRequestChat $request_chat = null,
        ?bool $request_contact = null,
        ?bool $request_location = null,
        ?KeyboardButtonPollType $request_poll = null,
        ?WebAppInfo $web_app = null,
    ): static {
        return new static([
            'text' => $text,
            'request_user' => $request_user,
            'request_chat' => $request_chat,
            'request_contact' => $request_contact,
            'request_location' => $request_location,
            'request_poll' => $request_poll,
            'web_app' => $web_app,
        ]);
    }
}

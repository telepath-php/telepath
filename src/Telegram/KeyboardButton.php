<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one button of the reply keyboard. At most one of the fields other than <em>text</em>, <em>icon_custom_emoji_id</em>, and <em>style</em> must be used to specify the type of the button. For simple text buttons, <em>String</em> can be used instead of this object to specify the button text.
 */
class KeyboardButton extends Type
{
    /** Text of the button. If none of the fields other than <em>text</em>, <em>icon_custom_emoji_id</em>, and <em>style</em> are used, it will be sent as a message when the button is pressed */
    public string $text;

    /** <em>Optional</em>. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on <a href="https://fragment.com">Fragment</a> or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription. */
    public ?string $icon_custom_emoji_id = null;

    /** <em>Optional</em>. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used. */
    public ?string $style = null;

    /** <em>Optional</em>. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only. */
    public ?KeyboardButtonRequestUsers $request_users = null;

    /** <em>Optional</em>. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only. */
    public ?KeyboardButtonRequestChat $request_chat = null;

    /** <em>Optional</em>. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the <a href="https://t.me/BotFather">@BotFather</a> Mini App. Available in private chats only. */
    public ?KeyboardButtonRequestManagedBot $request_managed_bot = null;

    /** <em>Optional</em>. If <em>True</em>, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only. */
    public ?bool $request_contact = null;

    /** <em>Optional</em>. If <em>True</em>, the user's current location will be sent when the button is pressed. Available in private chats only. */
    public ?bool $request_location = null;

    /** <em>Optional</em>. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only. */
    public ?KeyboardButtonPollType $request_poll = null;

    /** <em>Optional</em>. If specified, the described <a href="https://core.telegram.org/bots/webapps">Web App</a> will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only. */
    public ?WebAppInfo $web_app = null;

    /**
     * @param  string  $text  Text of the button. If none of the fields other than <em>text</em>, <em>icon_custom_emoji_id</em>, and <em>style</em> are used, it will be sent as a message when the button is pressed
     * @param  string  $icon_custom_emoji_id  <em>Optional</em>. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on <a href="https://fragment.com">Fragment</a> or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
     * @param  string  $style  <em>Optional</em>. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
     * @param  KeyboardButtonRequestUsers  $request_users  <em>Optional</em>. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
     * @param  KeyboardButtonRequestChat  $request_chat  <em>Optional</em>. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
     * @param  KeyboardButtonRequestManagedBot  $request_managed_bot  <em>Optional</em>. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the <a href="https://t.me/BotFather">@BotFather</a> Mini App. Available in private chats only.
     * @param  bool  $request_contact  <em>Optional</em>. If <em>True</em>, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     * @param  bool  $request_location  <em>Optional</em>. If <em>True</em>, the user's current location will be sent when the button is pressed. Available in private chats only.
     * @param  KeyboardButtonPollType  $request_poll  <em>Optional</em>. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     * @param  WebAppInfo  $web_app  <em>Optional</em>. If specified, the described <a href="https://core.telegram.org/bots/webapps">Web App</a> will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     */
    public static function make(
        string $text,
        ?string $icon_custom_emoji_id = null,
        ?string $style = null,
        ?KeyboardButtonRequestUsers $request_users = null,
        ?KeyboardButtonRequestChat $request_chat = null,
        ?KeyboardButtonRequestManagedBot $request_managed_bot = null,
        ?bool $request_contact = null,
        ?bool $request_location = null,
        ?KeyboardButtonPollType $request_poll = null,
        ?WebAppInfo $web_app = null,
    ): static {
        return new static([
            'text' => $text,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
            'style' => $style,
            'request_users' => $request_users,
            'request_chat' => $request_chat,
            'request_managed_bot' => $request_managed_bot,
            'request_contact' => $request_contact,
            'request_location' => $request_location,
            'request_poll' => $request_poll,
            'web_app' => $web_app,
        ]);
    }
}

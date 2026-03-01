<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one button of an inline keyboard. Exactly one of the fields other than <em>text</em>, <em>icon_custom_emoji_id</em>, and <em>style</em> must be used to specify the type of the button.
 */
class InlineKeyboardButton extends Type
{
    /** Label text on the button */
    public string $text;

    /** <em>Optional</em>. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on <a href="https://fragment.com">Fragment</a> or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription. */
    public ?string $icon_custom_emoji_id = null;

    /** <em>Optional</em>. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used. */
    public ?string $style = null;

    /** <em>Optional</em>. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings. */
    public ?string $url = null;

    /** <em>Optional</em>. Data to be sent in a <a href="https://core.telegram.org/bots/api#callbackquery">callback query</a> to the bot when the button is pressed, 1-64 bytes */
    public ?string $callback_data = null;

    /** <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account. */
    public ?WebAppInfo $web_app = null;

    /** <em>Optional</em>. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the <a href="https://core.telegram.org/widgets/login">Telegram Login Widget</a>. */
    public ?LoginUrl $login_url = null;

    /** <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account. */
    public ?string $switch_inline_query = null;

    /** <em>Optional</em>. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a Telegram Business account. */
    public ?string $switch_inline_query_current_chat = null;

    /** <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account. */
    public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null;

    /** <em>Optional</em>. Description of the button that copies the specified text to the clipboard. */
    public ?CopyTextButton $copy_text = null;

    /** <em>Optional</em>. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row. */
    public ?CallbackGame $callback_game = null;

    /** <em>Optional</em>. Specify <em>True</em>, to send a <a href="https://core.telegram.org/bots/api#payments">Pay button</a>. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages. */
    public ?bool $pay = null;

    /**
     * @param  string  $text  Label text on the button
     * @param  string  $icon_custom_emoji_id  <em>Optional</em>. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on <a href="https://fragment.com">Fragment</a> or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
     * @param  string  $style  <em>Optional</em>. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
     * @param  string  $url  <em>Optional</em>. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     * @param  string  $callback_data  <em>Optional</em>. Data to be sent in a <a href="https://core.telegram.org/bots/api#callbackquery">callback query</a> to the bot when the button is pressed, 1-64 bytes
     * @param  WebAppInfo  $web_app  <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account.
     * @param  LoginUrl  $login_url  <em>Optional</em>. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the <a href="https://core.telegram.org/widgets/login">Telegram Login Widget</a>.
     * @param  string  $switch_inline_query  <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param  string  $switch_inline_query_current_chat  <em>Optional</em>. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param  SwitchInlineQueryChosenChat  $switch_inline_query_chosen_chat  <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param  CopyTextButton  $copy_text  <em>Optional</em>. Description of the button that copies the specified text to the clipboard.
     * @param  CallbackGame  $callback_game  <em>Optional</em>. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
     * @param  bool  $pay  <em>Optional</em>. Specify <em>True</em>, to send a <a href="https://core.telegram.org/bots/api#payments">Pay button</a>. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    public static function make(
        string $text,
        ?string $icon_custom_emoji_id = null,
        ?string $style = null,
        ?string $url = null,
        ?string $callback_data = null,
        ?WebAppInfo $web_app = null,
        ?LoginUrl $login_url = null,
        ?string $switch_inline_query = null,
        ?string $switch_inline_query_current_chat = null,
        ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null,
        ?CopyTextButton $copy_text = null,
        ?CallbackGame $callback_game = null,
        ?bool $pay = null,
    ): static {
        return new static([
            'text' => $text,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
            'style' => $style,
            'url' => $url,
            'callback_data' => $callback_data,
            'web_app' => $web_app,
            'login_url' => $login_url,
            'switch_inline_query' => $switch_inline_query,
            'switch_inline_query_current_chat' => $switch_inline_query_current_chat,
            'switch_inline_query_chosen_chat' => $switch_inline_query_chosen_chat,
            'copy_text' => $copy_text,
            'callback_game' => $callback_game,
            'pay' => $pay,
        ]);
    }
}

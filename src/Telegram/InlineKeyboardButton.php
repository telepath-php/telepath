<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
class InlineKeyboardButton extends Type
{
    /** Label text on the button */
    public string $text;

    /** <em>Optional</em>. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings. */
    public ?string $url = null;

    /** <em>Optional</em>. Data to be sent in a <a href="https://core.telegram.org/bots/api#callbackquery">callback query</a> to the bot when button is pressed, 1-64 bytes */
    public ?string $callback_data = null;

    /** <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Available only in private chats between a user and the bot. */
    public ?WebAppInfo $web_app = null;

    /** <em>Optional</em>. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the <a href="https://core.telegram.org/widgets/login">Telegram Login Widget</a>. */
    public ?LoginUrl $login_url = null;

    /** <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. */
    public ?string $switch_inline_query = null;

    /** <em>Optional</em>. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. */
    public ?string $switch_inline_query_current_chat = null;

    /** <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field */
    public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null;

    /** <em>Optional</em>. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row. */
    public ?CallbackGame $callback_game = null;

    /** <em>Optional</em>. Specify <em>True</em>, to send a <a href="https://core.telegram.org/bots/api#payments">Pay button</a>.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages. */
    public ?bool $pay = null;

    /**
     * @param  string  $text Label text on the button
     * @param  string  $url <em>Optional</em>. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     * @param  string  $callback_data <em>Optional</em>. Data to be sent in a <a href="https://core.telegram.org/bots/api#callbackquery">callback query</a> to the bot when button is pressed, 1-64 bytes
     * @param  WebAppInfo  $web_app <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Available only in private chats between a user and the bot.
     * @param  LoginUrl  $login_url <em>Optional</em>. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the <a href="https://core.telegram.org/widgets/login">Telegram Login Widget</a>.
     * @param  string  $switch_inline_query <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.
     * @param  string  $switch_inline_query_current_chat <em>Optional</em>. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
     * @param  SwitchInlineQueryChosenChat  $switch_inline_query_chosen_chat <em>Optional</em>. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field
     * @param  CallbackGame  $callback_game <em>Optional</em>. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
     * @param  bool  $pay <em>Optional</em>. Specify <em>True</em>, to send a <a href="https://core.telegram.org/bots/api#payments">Pay button</a>.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    public static function make(
        string $text,
        string $url = null,
        string $callback_data = null,
        WebAppInfo $web_app = null,
        LoginUrl $login_url = null,
        string $switch_inline_query = null,
        string $switch_inline_query_current_chat = null,
        SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null,
        CallbackGame $callback_game = null,
        bool $pay = null,
    ): static {
        return new static([
            'text' => $text,
            'url' => $url,
            'callback_data' => $callback_data,
            'web_app' => $web_app,
            'login_url' => $login_url,
            'switch_inline_query' => $switch_inline_query,
            'switch_inline_query_current_chat' => $switch_inline_query_current_chat,
            'switch_inline_query_chosen_chat' => $switch_inline_query_chosen_chat,
            'callback_game' => $callback_game,
            'pay' => $pay,
        ]);
    }
}

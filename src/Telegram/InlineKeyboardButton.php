<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
class InlineKeyboardButton extends \Tii\Telepath\Type
{
    /** Label text on the button */
    public string $text;

    /** Optional. HTTP or tg:// url to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings. */
    public ?string $url = null;

    /** Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes */
    public ?string $callback_data = null;

    /** Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. */
    public ?WebAppInfo $web_app = null;

    /** Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget. */
    public ?LoginUrl $login_url = null;

    /** Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen. */
    public ?string $switch_inline_query = null;

    /** Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options. */
    public ?string $switch_inline_query_current_chat = null;

    /** Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row. */
    public ?CallbackGame $callback_game = null;

    /** Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages. */
    public ?bool $pay = null;

    /**
     * @param string $text Label text on the button
     * @param string $url Optional. HTTP or tg:// url to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     * @param string $callback_data Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     * @param WebAppInfo $web_app Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot.
     * @param LoginUrl $login_url Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     * @param string $switch_inline_query Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     * @param string $switch_inline_query_current_chat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     * @param CallbackGame $callback_game Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
     * @param bool $pay Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    public static function make(
        string $text,
        ?string $url = null,
        ?string $callback_data = null,
        ?WebAppInfo $web_app = null,
        ?LoginUrl $login_url = null,
        ?string $switch_inline_query = null,
        ?string $switch_inline_query_current_chat = null,
        ?CallbackGame $callback_game = null,
        ?bool $pay = null
    ): static {
        return new static([
            'text' => $text,
            'url' => $url,
            'callback_data' => $callback_data,
            'web_app' => $web_app,
            'login_url' => $login_url,
            'switch_inline_query' => $switch_inline_query,
            'switch_inline_query_current_chat' => $switch_inline_query_current_chat,
            'callback_game' => $callback_game,
            'pay' => $pay,
        ]);
    }
}

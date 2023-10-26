<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 */
class ReplyKeyboardMarkup extends Type
{
    /**
     * Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api#keyboardbutton">KeyboardButton</a> objects
     * @var KeyboardButton[][]
     */
    public array $keyboard;

    /** <em>Optional</em>. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to <em>false</em>, in which case the custom keyboard can be hidden and opened with a keyboard icon. */
    public ?bool $is_persistent = null;

    /** <em>Optional</em>. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to <em>false</em>, in which case the custom keyboard is always of the same height as the app's standard keyboard. */
    public ?bool $resize_keyboard = null;

    /** <em>Optional</em>. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to <em>false</em>. */
    public ?bool $one_time_keyboard = null;

    /** <em>Optional</em>. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters */
    public ?string $input_field_placeholder = null;

    /** <em>Optional</em>. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the <em>text</em> of the <a href="https://core.telegram.org/bots/api#message">Message</a> object; 2) if the bot's message is a reply (has <em>reply_to_message_id</em>), sender of the original message.<em>Example:</em> A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard. */
    public ?bool $selective = null;

    /**
     * @param KeyboardButton[][] $keyboard Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api#keyboardbutton">KeyboardButton</a> objects
     * @param bool $is_persistent <em>Optional</em>. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to <em>false</em>, in which case the custom keyboard can be hidden and opened with a keyboard icon.
     * @param bool $resize_keyboard <em>Optional</em>. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to <em>false</em>, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     * @param bool $one_time_keyboard <em>Optional</em>. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to <em>false</em>.
     * @param string $input_field_placeholder <em>Optional</em>. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     * @param bool $selective <em>Optional</em>. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the <em>text</em> of the <a href="https://core.telegram.org/bots/api#message">Message</a> object; 2) if the bot's message is a reply (has <em>reply_to_message_id</em>), sender of the original message.<em>Example:</em> A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
     */
    public static function make(
        array $keyboard,
        ?bool $is_persistent = null,
        ?bool $resize_keyboard = null,
        ?bool $one_time_keyboard = null,
        ?string $input_field_placeholder = null,
        ?bool $selective = null,
    ): static
    {
        return new static([
            'keyboard' => $keyboard,
            'is_persistent' => $is_persistent,
            'resize_keyboard' => $resize_keyboard,
            'one_time_keyboard' => $one_time_keyboard,
            'input_field_placeholder' => $input_field_placeholder,
            'selective' => $selective,
        ]);
    }
}

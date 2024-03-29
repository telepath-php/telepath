<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a button to be shown above inline query results. You must use exactly one of the optional fields.
 */
class InlineQueryResultsButton extends Type
{
    /** Label text on the button */
    public string $text;

    /** <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to switch back to the inline mode using the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">switchInlineQuery</a> inside the Web App. */
    public ?WebAppInfo $web_app = null;

    /** <em>Optional</em>. <a href="https://core.telegram.org/bots/features#deep-linking">Deep-linking</a> parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.<em>Example:</em> An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup"><em>switch_inline</em></a> button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities. */
    public ?string $start_parameter = null;

    /**
     * @param  string  $text  Label text on the button
     * @param  WebAppInfo  $web_app  <em>Optional</em>. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to switch back to the inline mode using the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">switchInlineQuery</a> inside the Web App.
     * @param  string  $start_parameter  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#deep-linking">Deep-linking</a> parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.<em>Example:</em> An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup"><em>switch_inline</em></a> button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
     */
    public static function make(string $text, ?WebAppInfo $web_app = null, ?string $start_parameter = null): static
    {
        return new static([
            'text' => $text,
            'web_app' => $web_app,
            'start_parameter' => $start_parameter,
        ]);
    }
}

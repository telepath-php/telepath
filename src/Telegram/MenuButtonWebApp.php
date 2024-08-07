<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp extends MenuButton
{
    /** Type of the button, must be <em>web_app</em> */
    public string $type = 'web_app';

    /** Text on the button */
    public string $text;

    /** Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link. */
    public WebAppInfo $web_app;

    /**
     * @param  string  $text  Text on the button
     * @param  WebAppInfo  $web_app  Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api#answerwebappquery">answerWebAppQuery</a>. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
     */
    public static function make(string $text, WebAppInfo $web_app): static
    {
        return new static([
            'text' => $text,
            'web_app' => $web_app,
        ]);
    }
}

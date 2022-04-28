<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp extends MenuButton
{
	/** Text on the button */
	public string $text;

	/** Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. */
	public WebAppInfo $web_app;
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineKeyboardButton extends \Tii\Telepath\Type
{
	public string $text;
	public string $url;
	public string $callback_data;
	public WebAppInfo $web_app;
	public LoginUrl $login_url;
	public string $switch_inline_query;
	public string $switch_inline_query_current_chat;
	public CallbackGame $callback_game;
	public bool $pay;
}

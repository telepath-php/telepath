<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InputTextMessageContent extends InputMessageContent
{
	public string $message_text;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $entities;
	public bool $disable_web_page_preview;
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineQueryResultVoice extends InlineQueryResult
{
	public string $type;
	public string $id;
	public string $voice_url;
	public string $title;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public int $voice_duration;
	public InlineKeyboardMarkup $reply_markup;
	public InputMessageContent $input_message_content;
}

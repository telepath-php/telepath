<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineQueryResultAudio extends InlineQueryResult
{
	public string $type;
	public string $id;
	public string $audio_url;
	public string $title;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public string $performer;
	public int $audio_duration;
	public InlineKeyboardMarkup $reply_markup;
	public InputMessageContent $input_message_content;
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineQueryResultPhoto extends InlineQueryResult
{
	public string $type;
	public string $id;
	public string $photo_url;
	public string $thumb_url;
	public int $photo_width;
	public int $photo_height;
	public string $title;
	public string $description;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public InlineKeyboardMarkup $reply_markup;
	public InputMessageContent $input_message_content;
}

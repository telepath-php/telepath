<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineQueryResultCachedGif extends InlineQueryResult
{
	public string $type;
	public string $id;
	public string $gif_file_id;
	public string $title;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public InlineKeyboardMarkup $reply_markup;
	public InputMessageContent $input_message_content;
}

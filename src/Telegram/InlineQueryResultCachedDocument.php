<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InlineQueryResultCachedDocument extends InlineQueryResult
{
	public string $type;
	public string $id;
	public string $title;
	public string $document_file_id;
	public string $description;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public InlineKeyboardMarkup $reply_markup;
	public InputMessageContent $input_message_content;
}

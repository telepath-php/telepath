<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
class InlineQueryResultCachedSticker extends InlineQueryResult
{
	/** A valid file identifier of the sticker */
	public string $sticker_file_id;

	/** Optional. Content of the message to be sent instead of the sticker */
	public ?InputMessageContent $input_message_content = null;


	/**
	 * @param string $sticker_file_id A valid file identifier of the sticker
	 * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the sticker
	 */
	public static function make(string $sticker_file_id, ?InputMessageContent $input_message_content = null): static
	{
		return new static([
		    'sticker_file_id' => $sticker_file_id,
		    'input_message_content' => $input_message_content,
		]);
	}
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends InlineQueryResult
{
	/** Title of the result */
	public string $title;

	/** Content of the message to be sent */
	public InputMessageContent $input_message_content;

	/** Optional. URL of the result */
	public ?string $url = null;

	/** Optional. Pass True, if you don't want the URL to be shown in the message */
	public ?bool $hide_url = null;

	/** Optional. Short description of the result */
	public ?string $description = null;

	/** Optional. Url of the thumbnail for the result */
	public ?string $thumb_url = null;

	/** Optional. Thumbnail width */
	public ?int $thumb_width = null;

	/** Optional. Thumbnail height */
	public ?int $thumb_height = null;


	/**
	 * @param string $title Title of the result
	 * @param InputMessageContent $input_message_content Content of the message to be sent
	 * @param string $url Optional. URL of the result
	 * @param bool $hide_url Optional. Pass True, if you don't want the URL to be shown in the message
	 * @param string $description Optional. Short description of the result
	 * @param string $thumb_url Optional. Url of the thumbnail for the result
	 * @param int $thumb_width Optional. Thumbnail width
	 * @param int $thumb_height Optional. Thumbnail height
	 */
	public static function make(
		string $title,
		InputMessageContent $input_message_content,
		?string $url = null,
		?bool $hide_url = null,
		?string $description = null,
		?string $thumb_url = null,
		?int $thumb_width = null,
		?int $thumb_height = null
	): static {
		return new static([
		    'title' => $title,
		    'input_message_content' => $input_message_content,
		    'url' => $url,
		    'hide_url' => $hide_url,
		    'description' => $description,
		    'thumb_url' => $thumb_url,
		    'thumb_width' => $thumb_width,
		    'thumb_height' => $thumb_height,
		]);
	}
}

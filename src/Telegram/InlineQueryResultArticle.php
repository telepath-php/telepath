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
	public string $url;

	/** Optional. Pass True, if you don't want the URL to be shown in the message */
	public bool $hide_url;

	/** Optional. Short description of the result */
	public string $description;

	/** Optional. Url of the thumbnail for the result */
	public string $thumb_url;

	/** Optional. Thumbnail width */
	public int $thumb_width;

	/** Optional. Thumbnail height */
	public int $thumb_height;
}

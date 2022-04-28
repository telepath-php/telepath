<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
	/** Contact's phone number */
	public string $phone_number;

	/** Contact's first name */
	public string $first_name;

	/** Optional. Contact's last name */
	public string $last_name;

	/** Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes */
	public string $vcard;

	/** Optional. Content of the message to be sent instead of the contact */
	public InputMessageContent $input_message_content;

	/** Optional. Url of the thumbnail for the result */
	public string $thumb_url;

	/** Optional. Thumbnail width */
	public int $thumb_width;

	/** Optional. Thumbnail height */
	public int $thumb_height;
}

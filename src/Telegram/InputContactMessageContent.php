<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent extends InputMessageContent
{
	/** Contact's phone number */
	public string $phone_number;

	/** Contact's first name */
	public string $first_name;

	/** Optional. Contact's last name */
	public string $last_name;

	/** Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes */
	public string $vcard;
}

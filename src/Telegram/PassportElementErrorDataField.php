<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField extends PassportElementError
{
	/** Error source, must be data */
	public string $source = 'data';

	/** Name of the data field which has the error */
	public string $field_name;

	/** Base64-encoded data hash */
	public string $data_hash;


	/**
	 * @param string $type The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
	 * @param string $field_name Name of the data field which has the error
	 * @param string $data_hash Base64-encoded data hash
	 * @param string $message Error message
	 */
	public static function make(string $type, string $field_name, string $data_hash, string $message): static
	{
		return new static([
		    'type' => $type,
		    'field_name' => $field_name,
		    'data_hash' => $data_hash,
		    'message' => $message,
		]);
	}
}

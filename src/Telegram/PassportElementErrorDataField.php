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
	/** Name of the data field which has the error */
	public string $field_name;

	/** Base64-encoded data hash */
	public string $data_hash;


	/**
	 * @param string $field_name Name of the data field which has the error
	 * @param string $data_hash Base64-encoded data hash
	 */
	public static function make(string $field_name, string $data_hash): static
	{
		return new static([
		    'field_name' => $field_name,
		    'data_hash' => $data_hash,
		]);
	}
}

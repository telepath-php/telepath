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
}

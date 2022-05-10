<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 */
abstract class PassportElementError extends \Tii\Telepath\Type
{
	/** Error source */
	public string $source;

	/** The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address” */
	public string $type;

	/** Error message */
	public string $message;


	/**
	 * @param string $source Error source
	 * @param string $type The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
	 * @param string $message Error message
	 */
	public static function make(string $source, string $type, string $message): static
	{
		return new static([
		    'source' => $source,
		    'type' => $type,
		    'message' => $message,
		]);
	}
}

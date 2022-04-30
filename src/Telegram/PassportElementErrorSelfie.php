<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSelfie extends PassportElementError
{
	/** Base64-encoded hash of the file with the selfie */
	public string $file_hash;


	/**
	 * @param string $file_hash Base64-encoded hash of the file with the selfie
	 */
	public static function make(string $file_hash): static
	{
		return new static([
		    'file_hash' => $file_hash,
		]);
	}
}

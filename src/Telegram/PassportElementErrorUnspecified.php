<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified extends PassportElementError
{
	/** Base64-encoded element hash */
	public string $element_hash;


	/**
	 * @param string $element_hash Base64-encoded element hash
	 */
	public static function make(string $element_hash): static
	{
		return new static([
		    'element_hash' => $element_hash,
		]);
	}
}

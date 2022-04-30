<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
class PassportElementErrorTranslationFile extends PassportElementError
{
	/** Base64-encoded file hash */
	public string $file_hash;


	/**
	 * @param string $file_hash Base64-encoded file hash
	 */
	public static function make(string $file_hash): static
	{
		return new static([
		    'file_hash' => $file_hash,
		]);
	}
}

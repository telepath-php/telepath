<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends PassportElementError
{
	/**
	 * List of base64-encoded file hashes
	 * @var string[]
	 */
	public array $file_hashes;
}

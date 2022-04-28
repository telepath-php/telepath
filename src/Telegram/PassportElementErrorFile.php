<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
class PassportElementErrorFile extends PassportElementError
{
	/** Base64-encoded file hash */
	public string $file_hash;
}

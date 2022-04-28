<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
class PassportElementErrorFrontSide extends PassportElementError
{
	/** Base64-encoded hash of the file with the front side of the document */
	public string $file_hash;
}

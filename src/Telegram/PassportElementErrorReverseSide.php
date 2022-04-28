<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
class PassportElementErrorReverseSide extends PassportElementError
{
	/** Base64-encoded hash of the file with the reverse side of the document */
	public string $file_hash;
}

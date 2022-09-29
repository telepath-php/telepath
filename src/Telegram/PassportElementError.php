<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 */
abstract class PassportElementError extends Type implements Factory
{
    /** Error source */
    public string $source;

    /** The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address” */
    public string $type;

    /** Error message */
    public string $message;

    public static function factory(array $data): self
    {
        return match($data['source']) {
            'data' => new PassportElementErrorDataField($data),
            'front_side' => new PassportElementErrorFrontSide($data),
            'reverse_side' => new PassportElementErrorReverseSide($data),
            'selfie' => new PassportElementErrorSelfie($data),
            'file' => new PassportElementErrorFile($data),
            'files' => new PassportElementErrorFiles($data),
            'translation_file' => new PassportElementErrorTranslationFile($data),
            'translation_files' => new PassportElementErrorTranslationFiles($data),
            'unspecified' => new PassportElementErrorUnspecified($data),
        };
    }
}

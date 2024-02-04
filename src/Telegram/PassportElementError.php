<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
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

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['source']) {
            'data' => new PassportElementErrorDataField($data, $bot),
            'front_side' => new PassportElementErrorFrontSide($data, $bot),
            'reverse_side' => new PassportElementErrorReverseSide($data, $bot),
            'selfie' => new PassportElementErrorSelfie($data, $bot),
            'file' => new PassportElementErrorFile($data, $bot),
            'files' => new PassportElementErrorFiles($data, $bot),
            'translation_file' => new PassportElementErrorTranslationFile($data, $bot),
            'translation_files' => new PassportElementErrorTranslationFiles($data, $bot),
            'unspecified' => new PassportElementErrorUnspecified($data, $bot),
        };
    }
}

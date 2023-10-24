<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 */
abstract class InputMessageContent extends Type implements Factory
{
    public static function factory(array $data, Bot $bot = null): self
    {
        return match ($data[null]) {
            null => new InputTextMessageContent($data, $bot),
            null => new InputLocationMessageContent($data, $bot),
            null => new InputVenueMessageContent($data, $bot),
            null => new InputContactMessageContent($data, $bot),
            null => new InputInvoiceMessageContent($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Factory;
use Tii\Telepath\Types\Type;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 */
abstract class InputMessageContent extends Type implements Factory
{
    public static function factory(array $data): static
    {
        return match($data[null]) {
            '' => new InputInvoiceMessageContent($data),
        };
    }
}

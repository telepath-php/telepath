<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * Contains information about an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage extends Type
{
    /** Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. */
    public ?string $inline_message_id = null;

    /**
     * @param string $inline_message_id Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     */
    public static function make(?string $inline_message_id = null): static
    {
        return new static([
            'inline_message_id' => $inline_message_id,
        ]);
    }
}

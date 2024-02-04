<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage extends Type
{
    /** <em>Optional</em>. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup">inline keyboard</a> attached to the message. */
    public ?string $inline_message_id = null;

    /**
     * @param  string  $inline_message_id  <em>Optional</em>. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup">inline keyboard</a> attached to the message.
     */
    public static function make(?string $inline_message_id = null): static
    {
        return new static([
            'inline_message_id' => $inline_message_id,
        ]);
    }
}

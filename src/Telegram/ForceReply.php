<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 */
class ForceReply extends Type
{
    /** Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply' */
    public bool $force_reply = true;

    /** <em>Optional</em>. The placeholder to be shown in the input field when the reply is active; 1-64 characters */
    public ?string $input_field_placeholder = null;

    /** <em>Optional</em>. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the <em>text</em> of the <a href="https://core.telegram.org/bots/api#message">Message</a> object; 2) if the bot's message is a reply (has <em>reply_to_message_id</em>), sender of the original message. */
    public ?bool $selective = null;

    /**
     * @param string $input_field_placeholder <em>Optional</em>. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     * @param bool $selective <em>Optional</em>. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the <em>text</em> of the <a href="https://core.telegram.org/bots/api#message">Message</a> object; 2) if the bot's message is a reply (has <em>reply_to_message_id</em>), sender of the original message.
     */
    public static function make(?string $input_field_placeholder = null, ?bool $selective = null): static
    {
        return new static([
            'input_field_placeholder' => $input_field_placeholder,
            'selective' => $selective,
        ]);
    }
}

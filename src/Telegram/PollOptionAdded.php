<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about an option added to a poll.
 */
class PollOptionAdded extends Type
{
    /** Unique identifier of the added option */
    public string $option_persistent_id;

    /** Option text */
    public string $option_text;

    /** <em>Optional</em>. Message containing the poll to which the option was added, if known. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?MaybeInaccessibleMessage $poll_message = null;

    /**
     * <em>Optional</em>. Special entities that appear in the <em>option_text</em>
     *
     * @var MessageEntity[]
     */
    public ?array $option_text_entities = null;

    /**
     * @param  string  $option_persistent_id  Unique identifier of the added option
     * @param  string  $option_text  Option text
     * @param  MaybeInaccessibleMessage  $poll_message  <em>Optional</em>. Message containing the poll to which the option was added, if known. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     * @param  MessageEntity[]  $option_text_entities  <em>Optional</em>. Special entities that appear in the <em>option_text</em>
     */
    public static function make(
        string $option_persistent_id,
        string $option_text,
        ?MaybeInaccessibleMessage $poll_message = null,
        ?array $option_text_entities = null,
    ): static {
        return new static([
            'option_persistent_id' => $option_persistent_id,
            'option_text' => $option_text,
            'poll_message' => $poll_message,
            'option_text_entities' => $option_text_entities,
        ]);
    }
}

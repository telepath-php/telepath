<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult extends Type
{
    /** The unique identifier for the result that was chosen */
    public string $result_id;

    /** The user that chose the result */
    public User $from;

    /** The query that was used to obtain the result */
    public string $query;

    /** <em>Optional</em>. Sender location, only for bots that require user location */
    public ?Location $location = null;

    /** <em>Optional</em>. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup">inline keyboard</a> attached to the message. Will be also received in <a href="https://core.telegram.org/bots/api#callbackquery">callback queries</a> and can be used to <a href="https://core.telegram.org/bots/api#updating-messages">edit</a> the message. */
    public ?string $inline_message_id = null;

    /**
     * @param string $result_id The unique identifier for the result that was chosen
     * @param User $from The user that chose the result
     * @param string $query The query that was used to obtain the result
     * @param Location $location <em>Optional</em>. Sender location, only for bots that require user location
     * @param string $inline_message_id <em>Optional</em>. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api#inlinekeyboardmarkup">inline keyboard</a> attached to the message. Will be also received in <a href="https://core.telegram.org/bots/api#callbackquery">callback queries</a> and can be used to <a href="https://core.telegram.org/bots/api#updating-messages">edit</a> the message.
     */
    public static function make(
        string $result_id,
        User $from,
        string $query,
        ?Location $location = null,
        ?string $inline_message_id = null,
    ): static
    {
        return new static([
            'result_id' => $result_id,
            'from' => $from,
            'query' => $query,
            'location' => $location,
            'inline_message_id' => $inline_message_id,
        ]);
    }
}

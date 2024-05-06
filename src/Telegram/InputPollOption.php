<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about one answer option in a poll to send.
 */
class InputPollOption extends Type
{
    /** Option text, 1-100 characters */
    public string $text;

    /** <em>Optional</em>. Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. Currently, only custom emoji entities are allowed */
    public ?string $text_parse_mode = null;

    /**
     * <em>Optional</em>. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of <em>text_parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /**
     * @param  string  $text  Option text, 1-100 characters
     * @param  string  $text_parse_mode  <em>Optional</em>. Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. Currently, only custom emoji entities are allowed
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of <em>text_parse_mode</em>
     */
    public static function make(string $text, ?string $text_parse_mode = null, ?array $text_entities = null): static
    {
        return new static([
            'text' => $text,
            'text_parse_mode' => $text_parse_mode,
            'text_entities' => $text_entities,
        ]);
    }
}

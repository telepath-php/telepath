<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a task to add to a checklist.
 */
class InputChecklistTask extends Type
{
    /** Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist */
    public int $id;

    /** Text of the task; 1-100 characters after entities parsing */
    public string $text;

    /** <em>Optional</em>. Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are allowed.
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /**
     * @param  int  $id  Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
     * @param  string  $text  Text of the task; 1-100 characters after entities parsing
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are allowed.
     */
    public static function make(
        int $id,
        string $text,
        ?string $parse_mode = null,
        ?array $text_entities = null,
    ): static {
        return new static([
            'id' => $id,
            'text' => $text,
            'parse_mode' => $parse_mode,
            'text_entities' => $text_entities,
        ]);
    }
}

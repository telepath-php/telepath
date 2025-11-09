<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
class TextQuote extends Type
{
    /** Text of the quoted part of a message that is replied to by the given message */
    public string $text;

    /** Approximate quote position in the original message in UTF-16 code units as specified by the sender */
    public int $position;

    /**
     * <em>Optional</em>. Special entities that appear in the quote. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are kept in quotes.
     *
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** <em>Optional</em>. <em>True</em>, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server. */
    public ?bool $is_manual = null;

    /**
     * @param  string  $text  Text of the quoted part of a message that is replied to by the given message
     * @param  int  $position  Approximate quote position in the original message in UTF-16 code units as specified by the sender
     * @param  MessageEntity[]  $entities  <em>Optional</em>. Special entities that appear in the quote. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are kept in quotes.
     * @param  bool  $is_manual  <em>Optional</em>. <em>True</em>, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
     */
    public static function make(string $text, int $position, ?array $entities = null, ?bool $is_manual = null): static
    {
        return new static([
            'text' => $text,
            'position' => $position,
            'entities' => $entities,
            'is_manual' => $is_manual,
        ]);
    }
}

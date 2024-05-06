<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption extends Type
{
    /** Option text, 1-100 characters */
    public string $text;

    /** Number of users that voted for this option */
    public int $voter_count;

    /**
     * <em>Optional</em>. Special entities that appear in the option <em>text</em>. Currently, only custom emoji entities are allowed in poll option texts
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /**
     * @param  string  $text  Option text, 1-100 characters
     * @param  int  $voter_count  Number of users that voted for this option
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. Special entities that appear in the option <em>text</em>. Currently, only custom emoji entities are allowed in poll option texts
     */
    public static function make(string $text, int $voter_count, ?array $text_entities = null): static
    {
        return new static([
            'text' => $text,
            'voter_count' => $voter_count,
            'text_entities' => $text_entities,
        ]);
    }
}

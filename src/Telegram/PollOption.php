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
    /** Unique identifier of the option, persistent on option addition and deletion */
    public string $persistent_id;

    /** Option text, 1-100 characters */
    public string $text;

    /** Number of users who voted for this option; may be 0 if unknown */
    public int $voter_count;

    /**
     * <em>Optional</em>. Special entities that appear in the option <em>text</em>. Currently, only custom emoji entities are allowed in poll option texts
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /** <em>Optional</em>. User who added the option; omitted if the option wasn't added by a user after poll creation */
    public ?User $added_by_user = null;

    /** <em>Optional</em>. Chat that added the option; omitted if the option wasn't added by a chat after poll creation */
    public ?Chat $added_by_chat = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll */
    public ?int $addition_date = null;

    /**
     * @param  string  $persistent_id  Unique identifier of the option, persistent on option addition and deletion
     * @param  string  $text  Option text, 1-100 characters
     * @param  int  $voter_count  Number of users who voted for this option; may be 0 if unknown
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. Special entities that appear in the option <em>text</em>. Currently, only custom emoji entities are allowed in poll option texts
     * @param  User  $added_by_user  <em>Optional</em>. User who added the option; omitted if the option wasn't added by a user after poll creation
     * @param  Chat  $added_by_chat  <em>Optional</em>. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
     * @param  int  $addition_date  <em>Optional</em>. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
     */
    public static function make(
        string $persistent_id,
        string $text,
        int $voter_count,
        ?array $text_entities = null,
        ?User $added_by_user = null,
        ?Chat $added_by_chat = null,
        ?int $addition_date = null,
    ): static {
        return new static([
            'persistent_id' => $persistent_id,
            'text' => $text,
            'voter_count' => $voter_count,
            'text_entities' => $text_entities,
            'added_by_user' => $added_by_user,
            'added_by_chat' => $added_by_chat,
            'addition_date' => $addition_date,
        ]);
    }
}

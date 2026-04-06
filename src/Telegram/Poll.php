<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a poll.
 */
class Poll extends Type
{
    /** Unique poll identifier */
    public string $id;

    /** Poll question, 1-300 characters */
    public string $question;

    /**
     * List of poll options
     *
     * @var PollOption[]
     */
    public array $options;

    /** Total number of users that voted in the poll */
    public int $total_voter_count;

    /** <em>True</em>, if the poll is closed */
    public bool $is_closed;

    /** <em>True</em>, if the poll is anonymous */
    public bool $is_anonymous;

    /** Poll type, currently can be “regular” or “quiz” */
    public string $type;

    /** <em>True</em>, if the poll allows multiple answers */
    public bool $allows_multiple_answers;

    /** <em>True</em>, if the poll allows to change the chosen answer options */
    public bool $allows_revoting;

    /**
     * <em>Optional</em>. Special entities that appear in the <em>question</em>. Currently, only custom emoji entities are allowed in poll questions
     *
     * @var MessageEntity[]
     */
    public ?array $question_entities = null;

    /**
     * <em>Optional</em>. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @var int[]
     */
    public ?array $correct_option_ids = null;

    /** <em>Optional</em>. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters */
    public ?string $explanation = null;

    /**
     * <em>Optional</em>. Special entities like usernames, URLs, bot commands, etc. that appear in the <em>explanation</em>
     *
     * @var MessageEntity[]
     */
    public ?array $explanation_entities = null;

    /** <em>Optional</em>. Amount of time in seconds the poll will be active after creation */
    public ?int $open_period = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the poll will be automatically closed */
    public ?int $close_date = null;

    /** <em>Optional</em>. Description of the poll; for polls inside the <a href="https://core.telegram.org/bots/api#message">Message</a> object only */
    public ?string $description = null;

    /**
     * <em>Optional</em>. Special entities like usernames, URLs, bot commands, etc. that appear in the description
     *
     * @var MessageEntity[]
     */
    public ?array $description_entities = null;

    /**
     * @param  string  $id  Unique poll identifier
     * @param  string  $question  Poll question, 1-300 characters
     * @param  PollOption[]  $options  List of poll options
     * @param  int  $total_voter_count  Total number of users that voted in the poll
     * @param  bool  $is_closed  <em>True</em>, if the poll is closed
     * @param  bool  $is_anonymous  <em>True</em>, if the poll is anonymous
     * @param  string  $type  Poll type, currently can be “regular” or “quiz”
     * @param  bool  $allows_multiple_answers  <em>True</em>, if the poll allows multiple answers
     * @param  bool  $allows_revoting  <em>True</em>, if the poll allows to change the chosen answer options
     * @param  MessageEntity[]  $question_entities  <em>Optional</em>. Special entities that appear in the <em>question</em>. Currently, only custom emoji entities are allowed in poll questions
     * @param  int[]  $correct_option_ids  <em>Optional</em>. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
     * @param  string  $explanation  <em>Optional</em>. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     * @param  MessageEntity[]  $explanation_entities  <em>Optional</em>. Special entities like usernames, URLs, bot commands, etc. that appear in the <em>explanation</em>
     * @param  int  $open_period  <em>Optional</em>. Amount of time in seconds the poll will be active after creation
     * @param  int  $close_date  <em>Optional</em>. Point in time (Unix timestamp) when the poll will be automatically closed
     * @param  string  $description  <em>Optional</em>. Description of the poll; for polls inside the <a href="https://core.telegram.org/bots/api#message">Message</a> object only
     * @param  MessageEntity[]  $description_entities  <em>Optional</em>. Special entities like usernames, URLs, bot commands, etc. that appear in the description
     */
    public static function make(
        string $id,
        string $question,
        array $options,
        int $total_voter_count,
        bool $is_closed,
        bool $is_anonymous,
        string $type,
        bool $allows_multiple_answers,
        bool $allows_revoting,
        ?array $question_entities = null,
        ?array $correct_option_ids = null,
        ?string $explanation = null,
        ?array $explanation_entities = null,
        ?int $open_period = null,
        ?int $close_date = null,
        ?string $description = null,
        ?array $description_entities = null,
    ): static {
        return new static([
            'id' => $id,
            'question' => $question,
            'options' => $options,
            'total_voter_count' => $total_voter_count,
            'is_closed' => $is_closed,
            'is_anonymous' => $is_anonymous,
            'type' => $type,
            'allows_multiple_answers' => $allows_multiple_answers,
            'allows_revoting' => $allows_revoting,
            'question_entities' => $question_entities,
            'correct_option_ids' => $correct_option_ids,
            'explanation' => $explanation,
            'explanation_entities' => $explanation_entities,
            'open_period' => $open_period,
            'close_date' => $close_date,
            'description' => $description,
            'description_entities' => $description_entities,
        ]);
    }
}

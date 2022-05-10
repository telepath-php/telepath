<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object contains information about a poll.
 */
class Poll extends \Tii\Telepath\Types\Type
{
    /** Unique poll identifier */
    public string $id;

    /** Poll question, 1-300 characters */
    public string $question;

    /**
     * List of poll options
     * @var PollOption[]
     */
    public array $options;

    /** Total number of users that voted in the poll */
    public int $total_voter_count;

    /** True, if the poll is closed */
    public bool $is_closed;

    /** True, if the poll is anonymous */
    public bool $is_anonymous;

    /** Poll type, currently can be “regular” or “quiz” */
    public string $type;

    /** True, if the poll allows multiple answers */
    public bool $allows_multiple_answers;

    /** Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot. */
    public ?int $correct_option_id = null;

    /** Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters */
    public ?string $explanation = null;

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @var MessageEntity[]
     */
    public ?array $explanation_entities = null;

    /** Optional. Amount of time in seconds the poll will be active after creation */
    public ?int $open_period = null;

    /** Optional. Point in time (Unix timestamp) when the poll will be automatically closed */
    public ?int $close_date = null;

    /**
     * @param string $id Unique poll identifier
     * @param string $question Poll question, 1-300 characters
     * @param PollOption[] $options List of poll options
     * @param int $total_voter_count Total number of users that voted in the poll
     * @param bool $is_closed True, if the poll is closed
     * @param bool $is_anonymous True, if the poll is anonymous
     * @param string $type Poll type, currently can be “regular” or “quiz”
     * @param bool $allows_multiple_answers True, if the poll allows multiple answers
     * @param int $correct_option_id Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     * @param string $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     * @param MessageEntity[] $explanation_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     * @param int $open_period Optional. Amount of time in seconds the poll will be active after creation
     * @param int $close_date Optional. Point in time (Unix timestamp) when the poll will be automatically closed
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
        ?int $correct_option_id = null,
        ?string $explanation = null,
        ?array $explanation_entities = null,
        ?int $open_period = null,
        ?int $close_date = null
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
            'correct_option_id' => $correct_option_id,
            'explanation' => $explanation,
            'explanation_entities' => $explanation_entities,
            'open_period' => $open_period,
            'close_date' => $close_date,
        ]);
    }
}

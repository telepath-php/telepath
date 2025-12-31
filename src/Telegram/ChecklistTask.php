<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a task in a checklist.
 */
class ChecklistTask extends Type
{
    /** Unique identifier of the task */
    public int $id;

    /** Text of the task */
    public string $text;

    /**
     * <em>Optional</em>. Special entities that appear in the task text
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /** <em>Optional</em>. User that completed the task; omitted if the task wasn't completed by a user */
    public ?User $completed_by_user = null;

    /** <em>Optional</em>. Chat that completed the task; omitted if the task wasn't completed by a chat */
    public ?Chat $completed_by_chat = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed */
    public ?int $completion_date = null;

    /**
     * @param  int  $id  Unique identifier of the task
     * @param  string  $text  Text of the task
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. Special entities that appear in the task text
     * @param  User  $completed_by_user  <em>Optional</em>. User that completed the task; omitted if the task wasn't completed by a user
     * @param  Chat  $completed_by_chat  <em>Optional</em>. Chat that completed the task; omitted if the task wasn't completed by a chat
     * @param  int  $completion_date  <em>Optional</em>. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
     */
    public static function make(
        int $id,
        string $text,
        ?array $text_entities = null,
        ?User $completed_by_user = null,
        ?Chat $completed_by_chat = null,
        ?int $completion_date = null,
    ): static {
        return new static([
            'id' => $id,
            'text' => $text,
            'text_entities' => $text_entities,
            'completed_by_user' => $completed_by_user,
            'completed_by_chat' => $completed_by_chat,
            'completion_date' => $completion_date,
        ]);
    }
}

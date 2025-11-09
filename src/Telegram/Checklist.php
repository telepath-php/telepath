<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a checklist.
 */
class Checklist extends Type
{
    /** Title of the checklist */
    public string $title;

    /**
     * List of tasks in the checklist
     *
     * @var ChecklistTask[]
     */
    public array $tasks;

    /**
     * <em>Optional</em>. Special entities that appear in the checklist title
     *
     * @var MessageEntity[]
     */
    public ?array $title_entities = null;

    /** <em>Optional</em>. <em>True</em>, if users other than the creator of the list can add tasks to the list */
    public ?bool $others_can_add_tasks = null;

    /** <em>Optional</em>. <em>True</em>, if users other than the creator of the list can mark tasks as done or not done */
    public ?bool $others_can_mark_tasks_as_done = null;

    /**
     * @param  string  $title  Title of the checklist
     * @param  ChecklistTask[]  $tasks  List of tasks in the checklist
     * @param  MessageEntity[]  $title_entities  <em>Optional</em>. Special entities that appear in the checklist title
     * @param  bool  $others_can_add_tasks  <em>Optional</em>. <em>True</em>, if users other than the creator of the list can add tasks to the list
     * @param  bool  $others_can_mark_tasks_as_done  <em>Optional</em>. <em>True</em>, if users other than the creator of the list can mark tasks as done or not done
     */
    public static function make(
        string $title,
        array $tasks,
        ?array $title_entities = null,
        ?bool $others_can_add_tasks = null,
        ?bool $others_can_mark_tasks_as_done = null,
    ): static {
        return new static([
            'title' => $title,
            'tasks' => $tasks,
            'title_entities' => $title_entities,
            'others_can_add_tasks' => $others_can_add_tasks,
            'others_can_mark_tasks_as_done' => $others_can_mark_tasks_as_done,
        ]);
    }
}

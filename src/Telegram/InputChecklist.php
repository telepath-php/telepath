<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a checklist to create.
 */
class InputChecklist extends Type
{
    /** Title of the checklist; 1-255 characters after entities parsing */
    public string $title;

    /**
     * List of 1-30 tasks in the checklist
     *
     * @var InputChecklistTask[]
     */
    public array $tasks;

    /** <em>Optional</em>. Mode for parsing entities in the title. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are allowed.
     *
     * @var MessageEntity[]
     */
    public ?array $title_entities = null;

    /** <em>Optional</em>. Pass <em>True</em> if other users can add tasks to the checklist */
    public ?bool $others_can_add_tasks = null;

    /** <em>Optional</em>. Pass <em>True</em> if other users can mark tasks as done or not done in the checklist */
    public ?bool $others_can_mark_tasks_as_done = null;

    /**
     * @param  string  $title  Title of the checklist; 1-255 characters after entities parsing
     * @param  InputChecklistTask[]  $tasks  List of 1-30 tasks in the checklist
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the title. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $title_entities  <em>Optional</em>. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities are allowed.
     * @param  bool  $others_can_add_tasks  <em>Optional</em>. Pass <em>True</em> if other users can add tasks to the checklist
     * @param  bool  $others_can_mark_tasks_as_done  <em>Optional</em>. Pass <em>True</em> if other users can mark tasks as done or not done in the checklist
     */
    public static function make(
        string $title,
        array $tasks,
        ?string $parse_mode = null,
        ?array $title_entities = null,
        ?bool $others_can_add_tasks = null,
        ?bool $others_can_mark_tasks_as_done = null,
    ): static {
        return new static([
            'title' => $title,
            'tasks' => $tasks,
            'parse_mode' => $parse_mode,
            'title_entities' => $title_entities,
            'others_can_add_tasks' => $others_can_add_tasks,
            'others_can_mark_tasks_as_done' => $others_can_mark_tasks_as_done,
        ]);
    }
}

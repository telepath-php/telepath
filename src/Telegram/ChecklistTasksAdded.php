<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about tasks added to a checklist.
 */
class ChecklistTasksAdded extends Type
{
    /**
     * List of tasks added to the checklist
     *
     * @var ChecklistTask[]
     */
    public array $tasks;

    /** <em>Optional</em>. Message containing the checklist to which the tasks were added. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $checklist_message = null;

    /**
     * @param  ChecklistTask[]  $tasks  List of tasks added to the checklist
     * @param  Message  $checklist_message  <em>Optional</em>. Message containing the checklist to which the tasks were added. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     */
    public static function make(array $tasks, ?Message $checklist_message = null): static
    {
        return new static([
            'tasks' => $tasks,
            'checklist_message' => $checklist_message,
        ]);
    }
}

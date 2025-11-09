<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 */
class ChecklistTasksDone extends Type
{
    /** <em>Optional</em>. Message containing the checklist whose tasks were marked as done or not done. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $checklist_message = null;

    /**
     * <em>Optional</em>. Identifiers of the tasks that were marked as done
     *
     * @var int[]
     */
    public ?array $marked_as_done_task_ids = null;

    /**
     * <em>Optional</em>. Identifiers of the tasks that were marked as not done
     *
     * @var int[]
     */
    public ?array $marked_as_not_done_task_ids = null;

    /**
     * @param  Message  $checklist_message  <em>Optional</em>. Message containing the checklist whose tasks were marked as done or not done. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     * @param  int[]  $marked_as_done_task_ids  <em>Optional</em>. Identifiers of the tasks that were marked as done
     * @param  int[]  $marked_as_not_done_task_ids  <em>Optional</em>. Identifiers of the tasks that were marked as not done
     */
    public static function make(
        ?Message $checklist_message = null,
        ?array $marked_as_done_task_ids = null,
        ?array $marked_as_not_done_task_ids = null,
    ): static {
        return new static([
            'checklist_message' => $checklist_message,
            'marked_as_done_task_ids' => $marked_as_done_task_ids,
            'marked_as_not_done_task_ids' => $marked_as_not_done_task_ids,
        ]);
    }
}

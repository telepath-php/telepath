<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a topic of a direct messages chat.
 */
class DirectMessagesTopic extends Type
{
    /** Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $topic_id;

    /** <em>Optional</em>. Information about the user that created the topic. Currently, it is always present */
    public ?User $user = null;

    /**
     * @param  int  $topic_id  Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  User  $user  <em>Optional</em>. Information about the user that created the topic. Currently, it is always present
     */
    public static function make(int $topic_id, ?User $user = null): static
    {
        return new static([
            'topic_id' => $topic_id,
            'user' => $user,
        ]);
    }
}

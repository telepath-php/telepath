<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
class MessageReactionUpdated extends Type
{
    /** The chat containing the message the user reacted to */
    public Chat $chat;

    /** Unique identifier of the message inside the chat */
    public int $message_id;

    /** Date of the change in Unix time */
    public int $date;

    /**
     * Previous list of reaction types that were set by the user
     *
     * @var ReactionType[]
     */
    public array $old_reaction;

    /**
     * New list of reaction types that have been set by the user
     *
     * @var ReactionType[]
     */
    public array $new_reaction;

    /** <em>Optional</em>. The user that changed the reaction, if the user isn't anonymous */
    public ?User $user = null;

    /** <em>Optional</em>. The chat on behalf of which the reaction was changed, if the user is anonymous */
    public ?Chat $actor_chat = null;

    /**
     * @param  Chat  $chat  The chat containing the message the user reacted to
     * @param  int  $message_id  Unique identifier of the message inside the chat
     * @param  int  $date  Date of the change in Unix time
     * @param  ReactionType[]  $old_reaction  Previous list of reaction types that were set by the user
     * @param  ReactionType[]  $new_reaction  New list of reaction types that have been set by the user
     * @param  User  $user  <em>Optional</em>. The user that changed the reaction, if the user isn't anonymous
     * @param  Chat  $actor_chat  <em>Optional</em>. The chat on behalf of which the reaction was changed, if the user is anonymous
     */
    public static function make(
        Chat $chat,
        int $message_id,
        int $date,
        array $old_reaction,
        array $new_reaction,
        ?User $user = null,
        ?Chat $actor_chat = null,
    ): static {
        return new static([
            'chat' => $chat,
            'message_id' => $message_id,
            'date' => $date,
            'old_reaction' => $old_reaction,
            'new_reaction' => $new_reaction,
            'user' => $user,
            'actor_chat' => $actor_chat,
        ]);
    }
}

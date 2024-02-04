<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The boost was obtained by the creation of a Telegram Premium giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
{
    /** Source of the boost, always “giveaway” */
    public string $source = 'giveaway';

    /** Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet. */
    public int $giveaway_message_id;

    /** <em>Optional</em>. True, if the giveaway was completed, but there was no user to win the prize */
    public ?bool $is_unclaimed = null;

    /**
     * @param  int  $giveaway_message_id Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param  User  $user <em>Optional</em>. User that won the prize in the giveaway if any
     * @param  bool  $is_unclaimed <em>Optional</em>. True, if the giveaway was completed, but there was no user to win the prize
     */
    public static function make(int $giveaway_message_id, User $user = null, bool $is_unclaimed = null): static
    {
        return new static([
            'giveaway_message_id' => $giveaway_message_id,
            'user' => $user,
            'is_unclaimed' => $is_unclaimed,
        ]);
    }
}

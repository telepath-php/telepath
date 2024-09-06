<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and <em>prize_star_count</em> / 500 times for one year for Telegram Star giveaways.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
{
    /** Source of the boost, always “giveaway” */
    public string $source = 'giveaway';

    /** Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet. */
    public int $giveaway_message_id;

    /** <em>Optional</em>. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prize_star_count = null;

    /** <em>Optional</em>. True, if the giveaway was completed, but there was no user to win the prize */
    public ?bool $is_unclaimed = null;

    /**
     * @param  int  $giveaway_message_id  Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     * @param  User  $user  <em>Optional</em>. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     * @param  int  $prize_star_count  <em>Optional</em>. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     * @param  bool  $is_unclaimed  <em>Optional</em>. True, if the giveaway was completed, but there was no user to win the prize
     */
    public static function make(
        int $giveaway_message_id,
        ?User $user = null,
        ?int $prize_star_count = null,
        ?bool $is_unclaimed = null,
    ): static {
        return new static([
            'giveaway_message_id' => $giveaway_message_id,
            'user' => $user,
            'prize_star_count' => $prize_star_count,
            'is_unclaimed' => $is_unclaimed,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a message about the completion of a giveaway with public winners.
 */
class GiveawayWinners extends Type
{
    /** The chat that created the giveaway */
    public Chat $chat;

    /** Identifier of the messsage with the giveaway in the chat */
    public int $giveaway_message_id;

    /** Point in time (Unix timestamp) when winners of the giveaway were selected */
    public int $winners_selection_date;

    /** Total number of winners in the giveaway */
    public int $winner_count;

    /**
     * List of up to 100 winners of the giveaway
     *
     * @var User[]
     */
    public array $winners;

    /** <em>Optional</em>. The number of other chats the user had to join in order to be eligible for the giveaway */
    public ?int $additional_chat_count = null;

    /** <em>Optional</em>. The number of months the Telegram Premium subscription won from the giveaway will be active for */
    public ?int $premium_subscription_month_count = null;

    /** <em>Optional</em>. Number of undistributed prizes */
    public ?int $unclaimed_prize_count = null;

    /** <em>Optional</em>. <em>True</em>, if only users who had joined the chats after the giveaway started were eligible to win */
    public ?bool $only_new_members = null;

    /** <em>Optional</em>. <em>True</em>, if the giveaway was canceled because the payment for it was refunded */
    public ?bool $was_refunded = null;

    /** <em>Optional</em>. Description of additional giveaway prize */
    public ?string $prize_description = null;

    /**
     * @param  Chat  $chat The chat that created the giveaway
     * @param  int  $giveaway_message_id Identifier of the messsage with the giveaway in the chat
     * @param  int  $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway were selected
     * @param  int  $winner_count Total number of winners in the giveaway
     * @param  User[]  $winners List of up to 100 winners of the giveaway
     * @param  int  $additional_chat_count <em>Optional</em>. The number of other chats the user had to join in order to be eligible for the giveaway
     * @param  int  $premium_subscription_month_count <em>Optional</em>. The number of months the Telegram Premium subscription won from the giveaway will be active for
     * @param  int  $unclaimed_prize_count <em>Optional</em>. Number of undistributed prizes
     * @param  bool  $only_new_members <em>Optional</em>. <em>True</em>, if only users who had joined the chats after the giveaway started were eligible to win
     * @param  bool  $was_refunded <em>Optional</em>. <em>True</em>, if the giveaway was canceled because the payment for it was refunded
     * @param  string  $prize_description <em>Optional</em>. Description of additional giveaway prize
     */
    public static function make(
        Chat $chat,
        int $giveaway_message_id,
        int $winners_selection_date,
        int $winner_count,
        array $winners,
        int $additional_chat_count = null,
        int $premium_subscription_month_count = null,
        int $unclaimed_prize_count = null,
        bool $only_new_members = null,
        bool $was_refunded = null,
        string $prize_description = null,
    ): static {
        return new static([
            'chat' => $chat,
            'giveaway_message_id' => $giveaway_message_id,
            'winners_selection_date' => $winners_selection_date,
            'winner_count' => $winner_count,
            'winners' => $winners,
            'additional_chat_count' => $additional_chat_count,
            'premium_subscription_month_count' => $premium_subscription_month_count,
            'unclaimed_prize_count' => $unclaimed_prize_count,
            'only_new_members' => $only_new_members,
            'was_refunded' => $was_refunded,
            'prize_description' => $prize_description,
        ]);
    }
}

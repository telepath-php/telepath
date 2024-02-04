<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a message about a scheduled giveaway.
 */
class Giveaway extends Type
{
    /**
     * The list of chats which the user must join to participate in the giveaway
     *
     * @var Chat[]
     */
    public array $chats;

    /** Point in time (Unix timestamp) when winners of the giveaway will be selected */
    public int $winners_selection_date;

    /** The number of users which are supposed to be selected as winners of the giveaway */
    public int $winner_count;

    /** <em>Optional</em>. <em>True</em>, if only users who join the chats after the giveaway started should be eligible to win */
    public ?bool $only_new_members = null;

    /** <em>Optional</em>. <em>True</em>, if the list of giveaway winners will be visible to everyone */
    public ?bool $has_public_winners = null;

    /** <em>Optional</em>. Description of additional giveaway prize */
    public ?string $prize_description = null;

    /**
     * <em>Optional</em>. A list of two-letter <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     *
     * @var string[]
     */
    public ?array $country_codes = null;

    /** <em>Optional</em>. The number of months the Telegram Premium subscription won from the giveaway will be active for */
    public ?int $premium_subscription_month_count = null;

    /**
     * @param  Chat[]  $chats  The list of chats which the user must join to participate in the giveaway
     * @param  int  $winners_selection_date  Point in time (Unix timestamp) when winners of the giveaway will be selected
     * @param  int  $winner_count  The number of users which are supposed to be selected as winners of the giveaway
     * @param  bool  $only_new_members  <em>Optional</em>. <em>True</em>, if only users who join the chats after the giveaway started should be eligible to win
     * @param  bool  $has_public_winners  <em>Optional</em>. <em>True</em>, if the list of giveaway winners will be visible to everyone
     * @param  string  $prize_description  <em>Optional</em>. Description of additional giveaway prize
     * @param  string[]  $country_codes  <em>Optional</em>. A list of two-letter <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     * @param  int  $premium_subscription_month_count  <em>Optional</em>. The number of months the Telegram Premium subscription won from the giveaway will be active for
     */
    public static function make(
        array $chats,
        int $winners_selection_date,
        int $winner_count,
        ?bool $only_new_members = null,
        ?bool $has_public_winners = null,
        ?string $prize_description = null,
        ?array $country_codes = null,
        ?int $premium_subscription_month_count = null,
    ): static {
        return new static([
            'chats' => $chats,
            'winners_selection_date' => $winners_selection_date,
            'winner_count' => $winner_count,
            'only_new_members' => $only_new_members,
            'has_public_winners' => $has_public_winners,
            'prize_description' => $prize_description,
            'country_codes' => $country_codes,
            'premium_subscription_month_count' => $premium_subscription_month_count,
        ]);
    }
}

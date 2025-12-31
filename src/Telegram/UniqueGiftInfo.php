<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a unique gift that was sent or received.
 */
class UniqueGiftInfo extends Type
{
    /** Information about the gift */
    public UniqueGift $gift;

    /** Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers */
    public string $origin;

    /** <em>Optional</em>. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins. */
    public ?string $last_resale_currency = null;

    /** <em>Optional</em>. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanotoncoins */
    public ?int $last_resale_amount = null;

    /** <em>Optional</em>. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts */
    public ?string $owned_gift_id = null;

    /** <em>Optional</em>. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
    public ?int $transfer_star_count = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now */
    public ?int $next_transfer_date = null;

    /**
     * @param  UniqueGift  $gift  Information about the gift
     * @param  string  $origin  Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers
     * @param  string  $last_resale_currency  <em>Optional</em>. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins.
     * @param  int  $last_resale_amount  <em>Optional</em>. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanotoncoins
     * @param  string  $owned_gift_id  <em>Optional</em>. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param  int  $transfer_star_count  <em>Optional</em>. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param  int  $next_transfer_date  <em>Optional</em>. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public static function make(
        UniqueGift $gift,
        string $origin,
        ?string $last_resale_currency = null,
        ?int $last_resale_amount = null,
        ?string $owned_gift_id = null,
        ?int $transfer_star_count = null,
        ?int $next_transfer_date = null,
    ): static {
        return new static([
            'gift' => $gift,
            'origin' => $origin,
            'last_resale_currency' => $last_resale_currency,
            'last_resale_amount' => $last_resale_amount,
            'owned_gift_id' => $owned_gift_id,
            'transfer_star_count' => $transfer_star_count,
            'next_transfer_date' => $next_transfer_date,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a unique gift received and owned by a user or a chat.
 */
class OwnedGiftUnique extends OwnedGift
{
    /** Type of the gift, always “unique” */
    public string $type = 'unique';

    /** <em>Optional</em>. <em>True</em>, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only */
    public ?bool $is_saved = null;

    /** <em>Optional</em>. <em>True</em>, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only */
    public ?bool $can_be_transferred = null;

    /** <em>Optional</em>. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift */
    public ?int $transfer_star_count = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now */
    public ?int $next_transfer_date = null;

    /**
     * @param  UniqueGift  $gift  Information about the unique gift
     * @param  int  $send_date  Date the gift was sent in Unix time
     * @param  string  $owned_gift_id  <em>Optional</em>. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
     * @param  User  $sender_user  <em>Optional</em>. Sender of the gift if it is a known user
     * @param  bool  $is_saved  <em>Optional</em>. <em>True</em>, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param  bool  $can_be_transferred  <em>Optional</em>. <em>True</em>, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     * @param  int  $transfer_star_count  <em>Optional</em>. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     * @param  int  $next_transfer_date  <em>Optional</em>. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public static function make(
        UniqueGift $gift,
        int $send_date,
        ?string $owned_gift_id = null,
        ?User $sender_user = null,
        ?bool $is_saved = null,
        ?bool $can_be_transferred = null,
        ?int $transfer_star_count = null,
        ?int $next_transfer_date = null,
    ): static {
        return new static([
            'gift' => $gift,
            'send_date' => $send_date,
            'owned_gift_id' => $owned_gift_id,
            'sender_user' => $sender_user,
            'is_saved' => $is_saved,
            'can_be_transferred' => $can_be_transferred,
            'transfer_star_count' => $transfer_star_count,
            'next_transfer_date' => $next_transfer_date,
        ]);
    }
}

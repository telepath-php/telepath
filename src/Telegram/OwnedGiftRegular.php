<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a regular gift owned by a user or a chat.
 */
class OwnedGiftRegular extends OwnedGift
{
    /** Type of the gift, always “regular” */
    public string $type = 'regular';

    /** <em>Optional</em>. Text of the message that was added to the gift */
    public ?string $text = null;

    /**
     * <em>Optional</em>. Special entities that appear in the text
     *
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** <em>Optional</em>. <em>True</em>, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them */
    public ?bool $is_private = null;

    /** <em>Optional</em>. <em>True</em>, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only */
    public ?bool $is_saved = null;

    /** <em>Optional</em>. <em>True</em>, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only */
    public ?bool $can_be_upgraded = null;

    /** <em>Optional</em>. <em>True</em>, if the gift was refunded and isn't available anymore */
    public ?bool $was_refunded = null;

    /** <em>Optional</em>. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars */
    public ?int $convert_star_count = null;

    /** <em>Optional</em>. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift */
    public ?int $prepaid_upgrade_star_count = null;

    /**
     * @param  Gift  $gift  Information about the regular gift
     * @param  int  $send_date  Date the gift was sent in Unix time
     * @param  string  $owned_gift_id  <em>Optional</em>. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
     * @param  User  $sender_user  <em>Optional</em>. Sender of the gift if it is a known user
     * @param  string  $text  <em>Optional</em>. Text of the message that was added to the gift
     * @param  MessageEntity[]  $entities  <em>Optional</em>. Special entities that appear in the text
     * @param  bool  $is_private  <em>Optional</em>. <em>True</em>, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     * @param  bool  $is_saved  <em>Optional</em>. <em>True</em>, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     * @param  bool  $can_be_upgraded  <em>Optional</em>. <em>True</em>, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     * @param  bool  $was_refunded  <em>Optional</em>. <em>True</em>, if the gift was refunded and isn't available anymore
     * @param  int  $convert_star_count  <em>Optional</em>. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
     * @param  int  $prepaid_upgrade_star_count  <em>Optional</em>. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
     */
    public static function make(
        Gift $gift,
        int $send_date,
        ?string $owned_gift_id = null,
        ?User $sender_user = null,
        ?string $text = null,
        ?array $entities = null,
        ?bool $is_private = null,
        ?bool $is_saved = null,
        ?bool $can_be_upgraded = null,
        ?bool $was_refunded = null,
        ?int $convert_star_count = null,
        ?int $prepaid_upgrade_star_count = null,
    ): static {
        return new static([
            'gift' => $gift,
            'send_date' => $send_date,
            'owned_gift_id' => $owned_gift_id,
            'sender_user' => $sender_user,
            'text' => $text,
            'entities' => $entities,
            'is_private' => $is_private,
            'is_saved' => $is_saved,
            'can_be_upgraded' => $can_be_upgraded,
            'was_refunded' => $was_refunded,
            'convert_star_count' => $convert_star_count,
            'prepaid_upgrade_star_count' => $prepaid_upgrade_star_count,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a regular gift that was sent or received.
 */
class GiftInfo extends Type
{
    /** Information about the gift */
    public Gift $gift;

    /** <em>Optional</em>. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts */
    public ?string $owned_gift_id = null;

    /** <em>Optional</em>. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible */
    public ?int $convert_star_count = null;

    /** <em>Optional</em>. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift */
    public ?int $prepaid_upgrade_star_count = null;

    /** <em>Optional</em>. <em>True</em>, if the gift can be upgraded to a unique gift */
    public ?bool $can_be_upgraded = null;

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

    /**
     * @param  Gift  $gift  Information about the gift
     * @param  string  $owned_gift_id  <em>Optional</em>. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     * @param  int  $convert_star_count  <em>Optional</em>. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
     * @param  int  $prepaid_upgrade_star_count  <em>Optional</em>. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
     * @param  bool  $can_be_upgraded  <em>Optional</em>. <em>True</em>, if the gift can be upgraded to a unique gift
     * @param  string  $text  <em>Optional</em>. Text of the message that was added to the gift
     * @param  MessageEntity[]  $entities  <em>Optional</em>. Special entities that appear in the text
     * @param  bool  $is_private  <em>Optional</em>. <em>True</em>, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public static function make(
        Gift $gift,
        ?string $owned_gift_id = null,
        ?int $convert_star_count = null,
        ?int $prepaid_upgrade_star_count = null,
        ?bool $can_be_upgraded = null,
        ?string $text = null,
        ?array $entities = null,
        ?bool $is_private = null,
    ): static {
        return new static([
            'gift' => $gift,
            'owned_gift_id' => $owned_gift_id,
            'convert_star_count' => $convert_star_count,
            'prepaid_upgrade_star_count' => $prepaid_upgrade_star_count,
            'can_be_upgraded' => $can_be_upgraded,
            'text' => $text,
            'entities' => $entities,
            'is_private' => $is_private,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a gift that can be sent by the bot.
 */
class Gift extends Type
{
    /** Unique identifier of the gift */
    public string $id;

    /** The sticker that represents the gift */
    public Sticker $sticker;

    /** The number of Telegram Stars that must be paid to send the sticker */
    public int $star_count;

    /** <em>Optional</em>. The number of Telegram Stars that must be paid to upgrade the gift to a unique one */
    public ?int $upgrade_star_count = null;

    /** <em>Optional</em>. <em>True</em>, if the gift can only be purchased by Telegram Premium subscribers */
    public ?bool $is_premium = null;

    /** <em>Optional</em>. <em>True</em>, if the gift can be used (after being upgraded) to customize a user's appearance */
    public ?bool $has_colors = null;

    /** <em>Optional</em>. The total number of gifts of this type that can be sent by all users; for limited gifts only */
    public ?int $total_count = null;

    /** <em>Optional</em>. The number of remaining gifts of this type that can be sent by all users; for limited gifts only */
    public ?int $remaining_count = null;

    /** <em>Optional</em>. The total number of gifts of this type that can be sent by the bot; for limited gifts only */
    public ?int $personal_total_count = null;

    /** <em>Optional</em>. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only */
    public ?int $personal_remaining_count = null;

    /** <em>Optional</em>. Background of the gift */
    public ?GiftBackground $background = null;

    /** <em>Optional</em>. The total number of different unique gifts that can be obtained by upgrading the gift */
    public ?int $unique_gift_variant_count = null;

    /** <em>Optional</em>. Information about the chat that published the gift */
    public ?Chat $publisher_chat = null;

    /**
     * @param  string  $id  Unique identifier of the gift
     * @param  Sticker  $sticker  The sticker that represents the gift
     * @param  int  $star_count  The number of Telegram Stars that must be paid to send the sticker
     * @param  int  $upgrade_star_count  <em>Optional</em>. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     * @param  bool  $is_premium  <em>Optional</em>. <em>True</em>, if the gift can only be purchased by Telegram Premium subscribers
     * @param  bool  $has_colors  <em>Optional</em>. <em>True</em>, if the gift can be used (after being upgraded) to customize a user's appearance
     * @param  int  $total_count  <em>Optional</em>. The total number of gifts of this type that can be sent by all users; for limited gifts only
     * @param  int  $remaining_count  <em>Optional</em>. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     * @param  int  $personal_total_count  <em>Optional</em>. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     * @param  int  $personal_remaining_count  <em>Optional</em>. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     * @param  GiftBackground  $background  <em>Optional</em>. Background of the gift
     * @param  int  $unique_gift_variant_count  <em>Optional</em>. The total number of different unique gifts that can be obtained by upgrading the gift
     * @param  Chat  $publisher_chat  <em>Optional</em>. Information about the chat that published the gift
     */
    public static function make(
        string $id,
        Sticker $sticker,
        int $star_count,
        ?int $upgrade_star_count = null,
        ?bool $is_premium = null,
        ?bool $has_colors = null,
        ?int $total_count = null,
        ?int $remaining_count = null,
        ?int $personal_total_count = null,
        ?int $personal_remaining_count = null,
        ?GiftBackground $background = null,
        ?int $unique_gift_variant_count = null,
        ?Chat $publisher_chat = null,
    ): static {
        return new static([
            'id' => $id,
            'sticker' => $sticker,
            'star_count' => $star_count,
            'upgrade_star_count' => $upgrade_star_count,
            'is_premium' => $is_premium,
            'has_colors' => $has_colors,
            'total_count' => $total_count,
            'remaining_count' => $remaining_count,
            'personal_total_count' => $personal_total_count,
            'personal_remaining_count' => $personal_remaining_count,
            'background' => $background,
            'unique_gift_variant_count' => $unique_gift_variant_count,
            'publisher_chat' => $publisher_chat,
        ]);
    }
}

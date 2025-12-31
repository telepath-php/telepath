<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
class AcceptedGiftTypes extends Type
{
    /** <em>True</em>, if unlimited regular gifts are accepted */
    public bool $unlimited_gifts;

    /** <em>True</em>, if limited regular gifts are accepted */
    public bool $limited_gifts;

    /** <em>True</em>, if unique gifts or gifts that can be upgraded to unique for free are accepted */
    public bool $unique_gifts;

    /** <em>True</em>, if a Telegram Premium subscription is accepted */
    public bool $premium_subscription;

    /** <em>True</em>, if transfers of unique gifts from channels are accepted */
    public bool $gifts_from_channels;

    /**
     * @param  bool  $unlimited_gifts  <em>True</em>, if unlimited regular gifts are accepted
     * @param  bool  $limited_gifts  <em>True</em>, if limited regular gifts are accepted
     * @param  bool  $unique_gifts  <em>True</em>, if unique gifts or gifts that can be upgraded to unique for free are accepted
     * @param  bool  $premium_subscription  <em>True</em>, if a Telegram Premium subscription is accepted
     * @param  bool  $gifts_from_channels  <em>True</em>, if transfers of unique gifts from channels are accepted
     */
    public static function make(
        bool $unlimited_gifts,
        bool $limited_gifts,
        bool $unique_gifts,
        bool $premium_subscription,
        bool $gifts_from_channels,
    ): static {
        return new static([
            'unlimited_gifts' => $unlimited_gifts,
            'limited_gifts' => $limited_gifts,
            'unique_gifts' => $unique_gifts,
            'premium_subscription' => $premium_subscription,
            'gifts_from_channels' => $gifts_from_channels,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a successful payment for a suggested post.
 */
class SuggestedPostPaid extends Type
{
    /** Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins */
    public string $currency;

    /** <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $suggested_post_message = null;

    /** <em>Optional</em>. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only */
    public ?int $amount = null;

    /** <em>Optional</em>. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only */
    public ?StarAmount $star_amount = null;

    /**
     * @param  string  $currency  Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
     * @param  Message  $suggested_post_message  <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     * @param  int  $amount  <em>Optional</em>. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
     * @param  StarAmount  $star_amount  <em>Optional</em>. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
     */
    public static function make(
        string $currency,
        ?Message $suggested_post_message = null,
        ?int $amount = null,
        ?StarAmount $star_amount = null,
    ): static {
        return new static([
            'currency' => $currency,
            'suggested_post_message' => $suggested_post_message,
            'amount' => $amount,
            'star_amount' => $star_amount,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a payment refund for a suggested post.
 */
class SuggestedPostRefunded extends Type
{
    /** Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment. */
    public string $reason;

    /** <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $suggested_post_message = null;

    /**
     * @param  string  $reason  Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
     * @param  Message  $suggested_post_message  <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     */
    public static function make(string $reason, ?Message $suggested_post_message = null): static
    {
        return new static([
            'reason' => $reason,
            'suggested_post_message' => $suggested_post_message,
        ]);
    }
}

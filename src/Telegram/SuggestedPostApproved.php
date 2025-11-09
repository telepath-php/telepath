<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about the approval of a suggested post.
 */
class SuggestedPostApproved extends Type
{
    /** Date when the post will be published */
    public int $send_date;

    /** <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $suggested_post_message = null;

    /** <em>Optional</em>. Amount paid for the post */
    public ?SuggestedPostPrice $price = null;

    /**
     * @param  int  $send_date  Date when the post will be published
     * @param  Message  $suggested_post_message  <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     * @param  SuggestedPostPrice  $price  <em>Optional</em>. Amount paid for the post
     */
    public static function make(
        int $send_date,
        ?Message $suggested_post_message = null,
        ?SuggestedPostPrice $price = null,
    ): static {
        return new static([
            'send_date' => $send_date,
            'suggested_post_message' => $suggested_post_message,
            'price' => $price,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 */
class SuggestedPostApprovalFailed extends Type
{
    /** Expected price of the post */
    public SuggestedPostPrice $price;

    /** <em>Optional</em>. Message containing the suggested post whose approval has failed. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $suggested_post_message = null;

    /**
     * @param  SuggestedPostPrice  $price  Expected price of the post
     * @param  Message  $suggested_post_message  <em>Optional</em>. Message containing the suggested post whose approval has failed. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     */
    public static function make(SuggestedPostPrice $price, ?Message $suggested_post_message = null): static
    {
        return new static([
            'price' => $price,
            'suggested_post_message' => $suggested_post_message,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains parameters of a post that is being suggested by the bot.
 */
class SuggestedPostParameters extends Type
{
    /** <em>Optional</em>. Proposed price for the post. If the field is omitted, then the post is unpaid. */
    public ?SuggestedPostPrice $price = null;

    /** <em>Optional</em>. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it. */
    public ?int $send_date = null;

    /**
     * @param  SuggestedPostPrice  $price  <em>Optional</em>. Proposed price for the post. If the field is omitted, then the post is unpaid.
     * @param  int  $send_date  <em>Optional</em>. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
     */
    public static function make(?SuggestedPostPrice $price = null, ?int $send_date = null): static
    {
        return new static([
            'price' => $price,
            'send_date' => $send_date,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains information about a suggested post.
 */
class SuggestedPostInfo extends Type
{
    /** State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”. */
    public string $state;

    /** <em>Optional</em>. Proposed price of the post. If the field is omitted, then the post is unpaid. */
    public ?SuggestedPostPrice $price = null;

    /** <em>Optional</em>. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it. */
    public ?int $send_date = null;

    /**
     * @param  string  $state  State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
     * @param  SuggestedPostPrice  $price  <em>Optional</em>. Proposed price of the post. If the field is omitted, then the post is unpaid.
     * @param  int  $send_date  <em>Optional</em>. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
     */
    public static function make(string $state, ?SuggestedPostPrice $price = null, ?int $send_date = null): static
    {
        return new static([
            'state' => $state,
            'price' => $price,
            'send_date' => $send_date,
        ]);
    }
}

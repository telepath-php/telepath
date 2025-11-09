<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about the rejection of a suggested post.
 */
class SuggestedPostDeclined extends Type
{
    /** <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply. */
    public ?Message $suggested_post_message = null;

    /** <em>Optional</em>. Comment with which the post was declined */
    public ?string $comment = null;

    /**
     * @param  Message  $suggested_post_message  <em>Optional</em>. Message containing the suggested post. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain the <em>reply_to_message</em> field even if it itself is a reply.
     * @param  string  $comment  <em>Optional</em>. Comment with which the post was declined
     */
    public static function make(?Message $suggested_post_message = null, ?string $comment = null): static
    {
        return new static([
            'suggested_post_message' => $suggested_post_message,
            'comment' => $comment,
        ]);
    }
}

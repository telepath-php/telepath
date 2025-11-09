<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes a gift received and owned by a user or a chat. Currently, it can be one of
 */
abstract class OwnedGift extends Type implements Factory
{
    /** Type of the gift */
    public string $type;

    /** Information about the regular gift */
    public Gift $gift;

    /** Date the gift was sent in Unix time */
    public int $send_date;

    /** <em>Optional</em>. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only */
    public ?string $owned_gift_id = null;

    /** <em>Optional</em>. Sender of the gift if it is a known user */
    public ?User $sender_user = null;

    /** <em>Optional</em>. <em>True</em>, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only */
    public ?bool $is_saved = null;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'regular' => new OwnedGiftRegular($data, $bot),
            'unique' => new OwnedGiftUnique($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the source of a chat boost. It can be one of
 */
abstract class ChatBoostSource extends Type implements Factory
{
    /** Source of the boost */
    public string $source;

    /** User that boosted the chat */
    public User $user;

    public static function factory(array $data, Bot $bot = null): self
    {
        return match ($data['source']) {
            'premium' => new ChatBoostSourcePremium($data, $bot),
            'gift_code' => new ChatBoostSourceGiftCode($data, $bot),
            'giveaway' => new ChatBoostSourceGiveaway($data, $bot),
        };
    }
}

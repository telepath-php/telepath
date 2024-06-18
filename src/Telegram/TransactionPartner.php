<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the source of a transaction, or its recipient for outgoing transactions. Currently, it can be one of
 */
abstract class TransactionPartner extends Type implements Factory
{
    /** Type of the transaction partner */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'fragment' => new TransactionPartnerFragment($data, $bot),
            'user' => new TransactionPartnerUser($data, $bot),
            'other' => new TransactionPartnerOther($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 */
abstract class RevenueWithdrawalState extends Type implements Factory
{
    /** Type of the state */
    public string $type;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'pending' => new RevenueWithdrawalStatePending($data, $bot),
            'succeeded' => new RevenueWithdrawalStateSucceeded($data, $bot),
            'failed' => new RevenueWithdrawalStateFailed($data, $bot),
        };
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The withdrawal is in progress.
 */
class RevenueWithdrawalStatePending extends RevenueWithdrawalState
{
    /** Type of the state, always “pending” */
    public string $type = 'pending';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

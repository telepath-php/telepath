<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The withdrawal failed and the transaction was refunded.
 */
class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    /** Type of the state, always “failed” */
    public string $type = 'failed';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The withdrawal succeeded.
 */
class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    /** Type of the state, always “succeeded” */
    public string $type = 'succeeded';

    /** Date the withdrawal was completed in Unix time */
    public int $date;

    /** An HTTPS URL that can be used to see transaction details */
    public string $url;

    /**
     * @param  int  $date  Date the withdrawal was completed in Unix time
     * @param  string  $url  An HTTPS URL that can be used to see transaction details
     */
    public static function make(int $date, string $url): static
    {
        return new static([
            'date' => $date,
            'url' => $url,
        ]);
    }
}

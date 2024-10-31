<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a transaction with payment for paid broadcasting.
 */
class TransactionPartnerTelegramApi extends TransactionPartner
{
    /** Type of the transaction partner, always “telegram_api” */
    public string $type = 'telegram_api';

    /** The number of successful requests that exceeded regular limits and were therefore billed */
    public int $request_count;

    /**
     * @param  int  $request_count  The number of successful requests that exceeded regular limits and were therefore billed
     */
    public static function make(int $request_count): static
    {
        return new static([
            'request_count' => $request_count,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a transaction with an unknown source or recipient.
 */
class TransactionPartnerOther extends TransactionPartner
{
    /** Type of the transaction partner, always “other” */
    public string $type = 'other';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

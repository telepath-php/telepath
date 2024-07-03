<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
class TransactionPartnerTelegramAds extends TransactionPartner
{
    /** Type of the transaction partner, always “telegram_ads” */
    public string $type = 'telegram_ads';

    public static function make(): static
    {
        return new static([
        ]);
    }
}

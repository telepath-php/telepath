<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
class TransactionPartnerAffiliateProgram extends TransactionPartner
{
    /** Type of the transaction partner, always “affiliate_program” */
    public string $type = 'affiliate_program';

    /** The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users */
    public int $commission_per_mille;

    /** <em>Optional</em>. Information about the bot that sponsored the affiliate program */
    public ?User $sponsor_user = null;

    /**
     * @param  int  $commission_per_mille  The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
     * @param  User  $sponsor_user  <em>Optional</em>. Information about the bot that sponsored the affiliate program
     */
    public static function make(int $commission_per_mille, ?User $sponsor_user = null): static
    {
        return new static([
            'commission_per_mille' => $commission_per_mille,
            'sponsor_user' => $sponsor_user,
        ]);
    }
}

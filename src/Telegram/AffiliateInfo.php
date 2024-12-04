<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 */
class AffiliateInfo extends Type
{
    /** The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users */
    public int $commission_per_mille;

    /** Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds */
    public int $amount;

    /** <em>Optional</em>. The bot or the user that received an affiliate commission if it was received by a bot or a user */
    public ?User $affiliate_user = null;

    /** <em>Optional</em>. The chat that received an affiliate commission if it was received by a chat */
    public ?Chat $affiliate_chat = null;

    /** <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds */
    public ?int $nanostar_amount = null;

    /**
     * @param  int  $commission_per_mille  The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     * @param  int  $amount  Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     * @param  User  $affiliate_user  <em>Optional</em>. The bot or the user that received an affiliate commission if it was received by a bot or a user
     * @param  Chat  $affiliate_chat  <em>Optional</em>. The chat that received an affiliate commission if it was received by a chat
     * @param  int  $nanostar_amount  <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
     */
    public static function make(
        int $commission_per_mille,
        int $amount,
        ?User $affiliate_user = null,
        ?Chat $affiliate_chat = null,
        ?int $nanostar_amount = null,
    ): static {
        return new static([
            'commission_per_mille' => $commission_per_mille,
            'amount' => $amount,
            'affiliate_user' => $affiliate_user,
            'affiliate_chat' => $affiliate_chat,
            'nanostar_amount' => $nanostar_amount,
        ]);
    }
}

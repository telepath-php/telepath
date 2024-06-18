<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a withdrawal transaction with Fragment.
 */
class TransactionPartnerFragment extends TransactionPartner
{
    /** Type of the transaction partner, always “fragment” */
    public string $type = 'fragment';

    /** <em>Optional</em>. State of the transaction if the transaction is outgoing */
    public ?RevenueWithdrawalState $withdrawal_state = null;

    /**
     * @param  RevenueWithdrawalState  $withdrawal_state  <em>Optional</em>. State of the transaction if the transaction is outgoing
     */
    public static function make(?RevenueWithdrawalState $withdrawal_state = null): static
    {
        return new static([
            'withdrawal_state' => $withdrawal_state,
        ]);
    }
}

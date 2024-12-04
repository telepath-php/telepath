<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a Telegram Star transaction.
 */
class StarTransaction extends Type
{
    /** Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with <em>SuccessfulPayment.telegram_payment_charge_id</em> for successful incoming payments from users. */
    public string $id;

    /** Integer amount of Telegram Stars transferred by the transaction */
    public int $amount;

    /** Date the transaction was created in Unix time */
    public int $date;

    /** <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999 */
    public ?int $nanostar_amount = null;

    /** <em>Optional</em>. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions */
    public ?TransactionPartner $source = null;

    /** <em>Optional</em>. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions */
    public ?TransactionPartner $receiver = null;

    /**
     * @param  string  $id  Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with <em>SuccessfulPayment.telegram_payment_charge_id</em> for successful incoming payments from users.
     * @param  int  $amount  Integer amount of Telegram Stars transferred by the transaction
     * @param  int  $date  Date the transaction was created in Unix time
     * @param  int  $nanostar_amount  <em>Optional</em>. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     * @param  TransactionPartner  $source  <em>Optional</em>. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
     * @param  TransactionPartner  $receiver  <em>Optional</em>. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
     */
    public static function make(
        string $id,
        int $amount,
        int $date,
        ?int $nanostar_amount = null,
        ?TransactionPartner $source = null,
        ?TransactionPartner $receiver = null,
    ): static {
        return new static([
            'id' => $id,
            'amount' => $amount,
            'date' => $date,
            'nanostar_amount' => $nanostar_amount,
            'source' => $source,
            'receiver' => $receiver,
        ]);
    }
}

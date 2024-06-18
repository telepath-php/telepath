<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains a list of Telegram Star transactions.
 */
class StarTransactions extends Type
{
    /**
     * The list of transactions
     *
     * @var StarTransaction[]
     */
    public array $transactions;

    /**
     * @param  StarTransaction[]  $transactions  The list of transactions
     */
    public static function make(array $transactions): static
    {
        return new static([
            'transactions' => $transactions,
        ]);
    }
}

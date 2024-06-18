<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends TransactionPartner
{
    /** Type of the transaction partner, always “user” */
    public string $type = 'user';

    /** Information about the user */
    public User $user;

    /**
     * @param  User  $user  Information about the user
     */
    public static function make(User $user): static
    {
        return new static([
            'user' => $user,
        ]);
    }
}

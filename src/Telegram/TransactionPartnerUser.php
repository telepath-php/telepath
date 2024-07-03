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

    /** <em>Optional</em>. Bot-specified invoice payload */
    public ?string $invoice_payload = null;

    /**
     * @param  User  $user  Information about the user
     * @param  string  $invoice_payload  <em>Optional</em>. Bot-specified invoice payload
     */
    public static function make(User $user, ?string $invoice_payload = null): static
    {
        return new static([
            'user' => $user,
            'invoice_payload' => $invoice_payload,
        ]);
    }
}

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

    /** <em>Optional</em>. The duration of the paid subscription */
    public ?int $subscription_period = null;

    /**
     * <em>Optional</em>. Information about the paid media bought by the user
     *
     * @var PaidMedia[]
     */
    public ?array $paid_media = null;

    /** <em>Optional</em>. Bot-specified paid media payload */
    public ?string $paid_media_payload = null;

    /** <em>Optional</em>. The gift sent to the user by the bot */
    public ?Gift $gift = null;

    /**
     * @param  User  $user  Information about the user
     * @param  string  $invoice_payload  <em>Optional</em>. Bot-specified invoice payload
     * @param  int  $subscription_period  <em>Optional</em>. The duration of the paid subscription
     * @param  PaidMedia[]  $paid_media  <em>Optional</em>. Information about the paid media bought by the user
     * @param  string  $paid_media_payload  <em>Optional</em>. Bot-specified paid media payload
     * @param  Gift  $gift  <em>Optional</em>. The gift sent to the user by the bot
     */
    public static function make(
        User $user,
        ?string $invoice_payload = null,
        ?int $subscription_period = null,
        ?array $paid_media = null,
        ?string $paid_media_payload = null,
        ?Gift $gift = null,
    ): static {
        return new static([
            'user' => $user,
            'invoice_payload' => $invoice_payload,
            'subscription_period' => $subscription_period,
            'paid_media' => $paid_media,
            'paid_media_payload' => $paid_media_payload,
            'gift' => $gift,
        ]);
    }
}

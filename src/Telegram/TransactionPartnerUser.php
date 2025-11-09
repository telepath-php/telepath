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

    /** Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts */
    public string $transaction_type;

    /** Information about the user */
    public User $user;

    /** <em>Optional</em>. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions. */
    public ?AffiliateInfo $affiliate = null;

    /** <em>Optional</em>. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions. */
    public ?string $invoice_payload = null;

    /** <em>Optional</em>. The duration of the paid subscription. Can be available only for “invoice_payment” transactions. */
    public ?int $subscription_period = null;

    /**
     * <em>Optional</em>. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     *
     * @var PaidMedia[]
     */
    public ?array $paid_media = null;

    /** <em>Optional</em>. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions. */
    public ?string $paid_media_payload = null;

    /** <em>Optional</em>. The gift sent to the user by the bot; for “gift_purchase” transactions only */
    public ?Gift $gift = null;

    /** <em>Optional</em>. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only */
    public ?int $premium_subscription_duration = null;

    /**
     * @param  string  $transaction_type  Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
     * @param  User  $user  Information about the user
     * @param  AffiliateInfo  $affiliate  <em>Optional</em>. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
     * @param  string  $invoice_payload  <em>Optional</em>. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
     * @param  int  $subscription_period  <em>Optional</em>. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
     * @param  PaidMedia[]  $paid_media  <em>Optional</em>. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     * @param  string  $paid_media_payload  <em>Optional</em>. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
     * @param  Gift  $gift  <em>Optional</em>. The gift sent to the user by the bot; for “gift_purchase” transactions only
     * @param  int  $premium_subscription_duration  <em>Optional</em>. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
     */
    public static function make(
        string $transaction_type,
        User $user,
        ?AffiliateInfo $affiliate = null,
        ?string $invoice_payload = null,
        ?int $subscription_period = null,
        ?array $paid_media = null,
        ?string $paid_media_payload = null,
        ?Gift $gift = null,
        ?int $premium_subscription_duration = null,
    ): static {
        return new static([
            'transaction_type' => $transaction_type,
            'user' => $user,
            'affiliate' => $affiliate,
            'invoice_payload' => $invoice_payload,
            'subscription_period' => $subscription_period,
            'paid_media' => $paid_media,
            'paid_media_payload' => $paid_media_payload,
            'gift' => $gift,
            'premium_subscription_duration' => $premium_subscription_duration,
        ]);
    }
}

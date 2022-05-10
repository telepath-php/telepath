<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Contains information about the current status of a webhook.
 */
class WebhookInfo extends \Tii\Telepath\Type
{
    /** Webhook URL, may be empty if webhook is not set up */
    public string $url;

    /** True, if a custom certificate was provided for webhook certificate checks */
    public bool $has_custom_certificate;

    /** Number of updates awaiting delivery */
    public int $pending_update_count;

    /** Optional. Currently used webhook IP address */
    public ?string $ip_address = null;

    /** Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook */
    public ?int $last_error_date = null;

    /** Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook */
    public ?string $last_error_message = null;

    /** Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters */
    public ?int $last_synchronization_error_date = null;

    /** Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery */
    public ?int $max_connections = null;

    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
     * @var string[]
     */
    public ?array $allowed_updates = null;

    /**
     * @param string $url Webhook URL, may be empty if webhook is not set up
     * @param bool $has_custom_certificate True, if a custom certificate was provided for webhook certificate checks
     * @param int $pending_update_count Number of updates awaiting delivery
     * @param string $ip_address Optional. Currently used webhook IP address
     * @param int $last_error_date Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @param string $last_error_message Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     * @param int $last_synchronization_error_date Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     * @param int $max_connections Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @param string[] $allowed_updates Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
     */
    public static function make(
        string $url,
        bool $has_custom_certificate,
        int $pending_update_count,
        ?string $ip_address = null,
        ?int $last_error_date = null,
        ?string $last_error_message = null,
        ?int $last_synchronization_error_date = null,
        ?int $max_connections = null,
        ?array $allowed_updates = null
    ): static {
        return new static([
            'url' => $url,
            'has_custom_certificate' => $has_custom_certificate,
            'pending_update_count' => $pending_update_count,
            'ip_address' => $ip_address,
            'last_error_date' => $last_error_date,
            'last_error_message' => $last_error_message,
            'last_synchronization_error_date' => $last_synchronization_error_date,
            'max_connections' => $max_connections,
            'allowed_updates' => $allowed_updates,
        ]);
    }
}

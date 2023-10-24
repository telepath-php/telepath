<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the current status of a webhook.
 */
class WebhookInfo extends Type
{
    /** Webhook URL, may be empty if webhook is not set up */
    public string $url;

    /** <em>True</em>, if a custom certificate was provided for webhook certificate checks */
    public bool $has_custom_certificate;

    /** Number of updates awaiting delivery */
    public int $pending_update_count;

    /** <em>Optional</em>. Currently used webhook IP address */
    public ?string $ip_address = null;

    /** <em>Optional</em>. Unix time for the most recent error that happened when trying to deliver an update via webhook */
    public ?int $last_error_date = null;

    /** <em>Optional</em>. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook */
    public ?string $last_error_message = null;

    /** <em>Optional</em>. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters */
    public ?int $last_synchronization_error_date = null;

    /** <em>Optional</em>. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery */
    public ?int $max_connections = null;

    /**
     * <em>Optional</em>. A list of update types the bot is subscribed to. Defaults to all update types except <em>chat_member</em>
     * @var string[]
     */
    public ?array $allowed_updates = null;

    /**
     * @param string $url Webhook URL, may be empty if webhook is not set up
     * @param bool $has_custom_certificate <em>True</em>, if a custom certificate was provided for webhook certificate checks
     * @param int $pending_update_count Number of updates awaiting delivery
     * @param string $ip_address <em>Optional</em>. Currently used webhook IP address
     * @param int $last_error_date <em>Optional</em>. Unix time for the most recent error that happened when trying to deliver an update via webhook
     * @param string $last_error_message <em>Optional</em>. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     * @param int $last_synchronization_error_date <em>Optional</em>. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     * @param int $max_connections <em>Optional</em>. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     * @param string[] $allowed_updates <em>Optional</em>. A list of update types the bot is subscribed to. Defaults to all update types except <em>chat_member</em>
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
        ?array $allowed_updates = null,
    ): static
    {
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

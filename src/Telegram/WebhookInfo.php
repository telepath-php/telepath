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
	public ?string $ip_address;

	/** Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook */
	public ?int $last_error_date;

	/** Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook */
	public ?string $last_error_message;

	/** Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters */
	public ?int $last_synchronization_error_date;

	/** Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery */
	public ?int $max_connections;

	/**
	 * Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
	 * @var string[]
	 */
	public ?array $allowed_updates;
}

<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class WebhookInfo extends \Tii\Telepath\Type
{
    public readonly string $url;

    public readonly bool $has_custom_certificate;

    public readonly int $pending_update_count;

    public readonly string $ip_address;

    public readonly int $last_error_date;

    public readonly string $last_error_message;

    public readonly int $last_synchronization_error_date;

    public readonly int $max_connections;

    /**
     * @var string[]
     */
    public readonly array $allowed_updates;
}


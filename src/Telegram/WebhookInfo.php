<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class WebhookInfo extends \Tii\Telepath\Type
{
    public string $url;

    public bool $has_custom_certificate;

    public int $pending_update_count;

    public string $ip_address;

    public int $last_error_date;

    public string $last_error_message;

    public int $last_synchronization_error_date;

    public int $max_connections;

    /**
     * @var string[]
     */
    public array $allowed_updates;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


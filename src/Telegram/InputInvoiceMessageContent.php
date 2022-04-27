<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputInvoiceMessageContent extends InputMessageContent
{
    public readonly string $title;

    public readonly string $description;

    public readonly string $payload;

    public readonly string $provider_token;

    public readonly string $currency;

    /**
     * @var LabeledPrice[]
     */
    public readonly array $prices;

    public readonly int $max_tip_amount;

    /**
     * @var int[]
     */
    public readonly array $suggested_tip_amounts;

    public readonly string $provider_data;

    public readonly string $photo_url;

    public readonly int $photo_size;

    public readonly int $photo_width;

    public readonly int $photo_height;

    public readonly bool $need_name;

    public readonly bool $need_phone_number;

    public readonly bool $need_email;

    public readonly bool $need_shipping_address;

    public readonly bool $send_phone_number_to_provider;

    public readonly bool $send_email_to_provider;

    public readonly bool $is_flexible;
}


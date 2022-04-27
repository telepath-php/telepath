<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputInvoiceMessageContent extends InputMessageContent
{
    public string $title;

    public string $description;

    public string $payload;

    public string $provider_token;

    public string $currency;

    /**
     * @var LabeledPrice[]
     */
    public array $prices;

    public int $max_tip_amount;

    /**
     * @var int[]
     */
    public array $suggested_tip_amounts;

    public string $provider_data;

    public string $photo_url;

    public int $photo_size;

    public int $photo_width;

    public int $photo_height;

    public bool $need_name;

    public bool $need_phone_number;

    public bool $need_email;

    public bool $need_shipping_address;

    public bool $send_phone_number_to_provider;

    public bool $send_email_to_provider;

    public bool $is_flexible;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


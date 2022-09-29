<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
class InputInvoiceMessageContent extends InputMessageContent
{
    /** Product name, 1-32 characters */
    public string $title;

    /** Product description, 1-255 characters */
    public string $description;

    /** Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes. */
    public string $payload;

    /** Payment provider token, obtained via @BotFather */
    public string $provider_token;

    /** Three-letter ISO 4217 currency code, see more on currencies */
    public string $currency;

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @var LabeledPrice[]
     */
    public array $prices;

    /** Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0 */
    public ?int $max_tip_amount = null;

    /**
     * Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @var int[]
     */
    public ?array $suggested_tip_amounts = null;

    /** Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider. */
    public ?string $provider_data = null;

    /** Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. */
    public ?string $photo_url = null;

    /** Optional. Photo size in bytes */
    public ?int $photo_size = null;

    /** Optional. Photo width */
    public ?int $photo_width = null;

    /** Optional. Photo height */
    public ?int $photo_height = null;

    /** Optional. Pass True if you require the user's full name to complete the order */
    public ?bool $need_name = null;

    /** Optional. Pass True if you require the user's phone number to complete the order */
    public ?bool $need_phone_number = null;

    /** Optional. Pass True if you require the user's email address to complete the order */
    public ?bool $need_email = null;

    /** Optional. Pass True if you require the user's shipping address to complete the order */
    public ?bool $need_shipping_address = null;

    /** Optional. Pass True if the user's phone number should be sent to provider */
    public ?bool $send_phone_number_to_provider = null;

    /** Optional. Pass True if the user's email address should be sent to provider */
    public ?bool $send_email_to_provider = null;

    /** Optional. Pass True if the final price depends on the shipping method */
    public ?bool $is_flexible = null;

    /**
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @param string $provider_token Payment provider token, obtained via @BotFather
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies
     * @param LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @param int $max_tip_amount Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @param int[] $suggested_tip_amounts Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string $provider_data Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     * @param string $photo_url Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param int $photo_size Optional. Photo size in bytes
     * @param int $photo_width Optional. Photo width
     * @param int $photo_height Optional. Photo height
     * @param bool $need_name Optional. Pass True if you require the user's full name to complete the order
     * @param bool $need_phone_number Optional. Pass True if you require the user's phone number to complete the order
     * @param bool $need_email Optional. Pass True if you require the user's email address to complete the order
     * @param bool $need_shipping_address Optional. Pass True if you require the user's shipping address to complete the order
     * @param bool $send_phone_number_to_provider Optional. Pass True if the user's phone number should be sent to provider
     * @param bool $send_email_to_provider Optional. Pass True if the user's email address should be sent to provider
     * @param bool $is_flexible Optional. Pass True if the final price depends on the shipping method
     */
    public static function make(
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        ?int $max_tip_amount = null,
        ?array $suggested_tip_amounts = null,
        ?string $provider_data = null,
        ?string $photo_url = null,
        ?int $photo_size = null,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?bool $need_name = null,
        ?bool $need_phone_number = null,
        ?bool $need_email = null,
        ?bool $need_shipping_address = null,
        ?bool $send_phone_number_to_provider = null,
        ?bool $send_email_to_provider = null,
        ?bool $is_flexible = null
    ): static {
        return new static([
            'title' => $title,
            'description' => $description,
            'payload' => $payload,
            'provider_token' => $provider_token,
            'currency' => $currency,
            'prices' => $prices,
            'max_tip_amount' => $max_tip_amount,
            'suggested_tip_amounts' => $suggested_tip_amounts,
            'provider_data' => $provider_data,
            'photo_url' => $photo_url,
            'photo_size' => $photo_size,
            'photo_width' => $photo_width,
            'photo_height' => $photo_height,
            'need_name' => $need_name,
            'need_phone_number' => $need_phone_number,
            'need_email' => $need_email,
            'need_shipping_address' => $need_shipping_address,
            'send_phone_number_to_provider' => $send_phone_number_to_provider,
            'send_email_to_provider' => $send_email_to_provider,
            'is_flexible' => $is_flexible,
        ]);
    }
}

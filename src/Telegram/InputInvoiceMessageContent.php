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

    /** Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes. */
    public string $payload;

    /** Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public string $currency;

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     *
     * @var LabeledPrice[]
     */
    public array $prices;

    /** <em>Optional</em>. Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?string $provider_token = null;

    /** <em>Optional</em>. The maximum accepted amount for tips in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?int $max_tip_amount = null;

    /**
     * <em>Optional</em>. A JSON-serialized array of suggested amounts of tip in the <em>smallest units</em> of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed <em>max_tip_amount</em>.
     *
     * @var int[]
     */
    public ?array $suggested_tip_amounts = null;

    /** <em>Optional</em>. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider. */
    public ?string $provider_data = null;

    /** <em>Optional</em>. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. */
    public ?string $photo_url = null;

    /** <em>Optional</em>. Photo size in bytes */
    public ?int $photo_size = null;

    /** <em>Optional</em>. Photo width */
    public ?int $photo_width = null;

    /** <em>Optional</em>. Photo height */
    public ?int $photo_height = null;

    /** <em>Optional</em>. Pass <em>True</em> if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $need_name = null;

    /** <em>Optional</em>. Pass <em>True</em> if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $need_phone_number = null;

    /** <em>Optional</em>. Pass <em>True</em> if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $need_email = null;

    /** <em>Optional</em>. Pass <em>True</em> if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $need_shipping_address = null;

    /** <em>Optional</em>. Pass <em>True</em> if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $send_phone_number_to_provider = null;

    /** <em>Optional</em>. Pass <em>True</em> if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $send_email_to_provider = null;

    /** <em>Optional</em>. Pass <em>True</em> if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. */
    public ?bool $is_flexible = null;

    /**
     * @param  string  $title  Product name, 1-32 characters
     * @param  string  $description  Product description, 1-255 characters
     * @param  string  $payload  Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param  string  $currency  Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  LabeledPrice[]  $prices  Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  string  $provider_token  <em>Optional</em>. Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int  $max_tip_amount  <em>Optional</em>. The maximum accepted amount for tips in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int[]  $suggested_tip_amounts  <em>Optional</em>. A JSON-serialized array of suggested amounts of tip in the <em>smallest units</em> of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed <em>max_tip_amount</em>.
     * @param  string  $provider_data  <em>Optional</em>. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     * @param  string  $photo_url  <em>Optional</em>. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param  int  $photo_size  <em>Optional</em>. Photo size in bytes
     * @param  int  $photo_width  <em>Optional</em>. Photo width
     * @param  int  $photo_height  <em>Optional</em>. Photo height
     * @param  bool  $need_name  <em>Optional</em>. Pass <em>True</em> if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_phone_number  <em>Optional</em>. Pass <em>True</em> if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_email  <em>Optional</em>. Pass <em>True</em> if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_shipping_address  <em>Optional</em>. Pass <em>True</em> if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_phone_number_to_provider  <em>Optional</em>. Pass <em>True</em> if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_email_to_provider  <em>Optional</em>. Pass <em>True</em> if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $is_flexible  <em>Optional</em>. Pass <em>True</em> if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     */
    public static function make(
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?string $provider_token = null,
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
        ?bool $is_flexible = null,
    ): static {
        return new static([
            'title' => $title,
            'description' => $description,
            'payload' => $payload,
            'currency' => $currency,
            'prices' => $prices,
            'provider_token' => $provider_token,
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

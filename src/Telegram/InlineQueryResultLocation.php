<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    /** Type of the result, must be <em>location</em> */
    public string $type = 'location';

    /** Location latitude in degrees */
    public float $latitude;

    /** Location longitude in degrees */
    public float $longitude;

    /** Location title */
    public string $title;

    /** <em>Optional</em>. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontal_accuracy = null;

    /** <em>Optional</em>. Period in seconds for which the location can be updated, should be between 60 and 86400. */
    public ?int $live_period = null;

    /** <em>Optional</em>. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
    public ?int $heading = null;

    /** <em>Optional</em>. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
    public ?int $proximity_alert_radius = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the location */
    public ?InputMessageContent $input_message_content = null;

    /** <em>Optional</em>. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** <em>Optional</em>. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** <em>Optional</em>. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param float $latitude Location latitude in degrees
     * @param float $longitude Location longitude in degrees
     * @param string $title Location title
     * @param float $horizontal_accuracy <em>Optional</em>. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int $live_period <em>Optional</em>. Period in seconds for which the location can be updated, should be between 60 and 86400.
     * @param int $heading <em>Optional</em>. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int $proximity_alert_radius <em>Optional</em>. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkup $reply_markup <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param InputMessageContent $input_message_content <em>Optional</em>. Content of the message to be sent instead of the location
     * @param string $thumbnail_url <em>Optional</em>. Url of the thumbnail for the result
     * @param int $thumbnail_width <em>Optional</em>. Thumbnail width
     * @param int $thumbnail_height <em>Optional</em>. Thumbnail height
     */
    public static function make(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
        ?string $thumbnail_url = null,
        ?int $thumbnail_width = null,
        ?int $thumbnail_height = null,
    ): static
    {
        return new static([
            'id' => $id,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'title' => $title,
            'horizontal_accuracy' => $horizontal_accuracy,
            'live_period' => $live_period,
            'heading' => $heading,
            'proximity_alert_radius' => $proximity_alert_radius,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
            'thumbnail_url' => $thumbnail_url,
            'thumbnail_width' => $thumbnail_width,
            'thumbnail_height' => $thumbnail_height,
        ]);
    }
}

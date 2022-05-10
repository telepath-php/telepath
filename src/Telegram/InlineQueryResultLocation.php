<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    /** Type of the result, must be location */
    public string $type = 'location';

    /** Location latitude in degrees */
    public float $latitude;

    /** Location longitude in degrees */
    public float $longitude;

    /** Location title */
    public string $title;

    /** Optional. The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontal_accuracy = null;

    /** Optional. Period in seconds for which the location can be updated, should be between 60 and 86400. */
    public ?int $live_period = null;

    /** Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified. */
    public ?int $heading = null;

    /** Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified. */
    public ?int $proximity_alert_radius = null;

    /** Optional. Content of the message to be sent instead of the location */
    public ?InputMessageContent $input_message_content = null;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumb_url = null;

    /** Optional. Thumbnail width */
    public ?int $thumb_width = null;

    /** Optional. Thumbnail height */
    public ?int $thumb_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param float $latitude Location latitude in degrees
     * @param float $longitude Location longitude in degrees
     * @param string $title Location title
     * @param float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int $live_period Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     * @param int $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int $proximity_alert_radius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the location
     * @param string $thumb_url Optional. Url of the thumbnail for the result
     * @param int $thumb_width Optional. Thumbnail width
     * @param int $thumb_height Optional. Thumbnail height
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
        ?string $thumb_url = null,
        ?int $thumb_width = null,
        ?int $thumb_height = null
    ): static {
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
            'thumb_url' => $thumb_url,
            'thumb_width' => $thumb_width,
            'thumb_height' => $thumb_height,
        ]);
    }
}

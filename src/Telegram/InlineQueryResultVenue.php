<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue extends InlineQueryResult
{
    /** Type of the result, must be venue */
    public string $type = 'venue';

    /** Latitude of the venue location in degrees */
    public float $latitude;

    /** Longitude of the venue location in degrees */
    public float $longitude;

    /** Title of the venue */
    public string $title;

    /** Address of the venue */
    public string $address;

    /** Optional. Foursquare identifier of the venue if known */
    public ?string $foursquare_id = null;

    /** Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
    public ?string $foursquare_type = null;

    /** Optional. Google Places identifier of the venue */
    public ?string $google_place_id = null;

    /** Optional. Google Places type of the venue. (See supported types.) */
    public ?string $google_place_type = null;

    /** Optional. Content of the message to be sent instead of the venue */
    public ?InputMessageContent $input_message_content = null;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** Optional. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** Optional. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param float $latitude Latitude of the venue location in degrees
     * @param float $longitude Longitude of the venue location in degrees
     * @param string $title Title of the venue
     * @param string $address Address of the venue
     * @param string $foursquare_id Optional. Foursquare identifier of the venue if known
     * @param string $foursquare_type Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string $google_place_id Optional. Google Places identifier of the venue
     * @param string $google_place_type Optional. Google Places type of the venue. (See supported types.)
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the venue
     * @param string $thumbnail_url Optional. Url of the thumbnail for the result
     * @param int $thumbnail_width Optional. Thumbnail width
     * @param int $thumbnail_height Optional. Thumbnail height
     */
    public static function make(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
        ?string $thumbnail_url = null,
        ?int $thumbnail_width = null,
        ?int $thumbnail_height = null,
    ): static {
        return new static([
            'id' => $id,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'title' => $title,
            'address' => $address,
            'foursquare_id' => $foursquare_id,
            'foursquare_type' => $foursquare_type,
            'google_place_id' => $google_place_id,
            'google_place_type' => $google_place_type,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
            'thumbnail_url' => $thumbnail_url,
            'thumbnail_width' => $thumbnail_width,
            'thumbnail_height' => $thumbnail_height,
        ]);
    }
}

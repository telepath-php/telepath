<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue extends InlineQueryResult
{
    /** Type of the result, must be <em>venue</em> */
    public string $type = 'venue';

    /** Latitude of the venue location in degrees */
    public float $latitude;

    /** Longitude of the venue location in degrees */
    public float $longitude;

    /** Title of the venue */
    public string $title;

    /** Address of the venue */
    public string $address;

    /** <em>Optional</em>. Foursquare identifier of the venue if known */
    public ?string $foursquare_id = null;

    /** <em>Optional</em>. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
    public ?string $foursquare_type = null;

    /** <em>Optional</em>. Google Places identifier of the venue */
    public ?string $google_place_id = null;

    /** <em>Optional</em>. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.) */
    public ?string $google_place_type = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the venue */
    public ?InputMessageContent $input_message_content = null;

    /** <em>Optional</em>. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** <em>Optional</em>. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** <em>Optional</em>. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 Bytes
     * @param  float  $latitude  Latitude of the venue location in degrees
     * @param  float  $longitude  Longitude of the venue location in degrees
     * @param  string  $title  Title of the venue
     * @param  string  $address  Address of the venue
     * @param  string  $foursquare_id  <em>Optional</em>. Foursquare identifier of the venue if known
     * @param  string  $foursquare_type  <em>Optional</em>. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param  string  $google_place_id  <em>Optional</em>. Google Places identifier of the venue
     * @param  string  $google_place_type  <em>Optional</em>. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the venue
     * @param  string  $thumbnail_url  <em>Optional</em>. Url of the thumbnail for the result
     * @param  int  $thumbnail_width  <em>Optional</em>. Thumbnail width
     * @param  int  $thumbnail_height  <em>Optional</em>. Thumbnail height
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

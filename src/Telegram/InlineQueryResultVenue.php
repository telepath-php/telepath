<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue extends InlineQueryResult
{
	/** Latitude of the venue location in degrees */
	public float $latitude;

	/** Longitude of the venue location in degrees */
	public float $longitude;

	/** Title of the venue */
	public string $title;

	/** Address of the venue */
	public string $address;

	/** Optional. Foursquare identifier of the venue if known */
	public string $foursquare_id;

	/** Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.) */
	public string $foursquare_type;

	/** Optional. Google Places identifier of the venue */
	public string $google_place_id;

	/** Optional. Google Places type of the venue. (See supported types.) */
	public string $google_place_type;

	/** Optional. Content of the message to be sent instead of the venue */
	public InputMessageContent $input_message_content;

	/** Optional. Url of the thumbnail for the result */
	public string $thumb_url;

	/** Optional. Thumbnail width */
	public int $thumb_width;

	/** Optional. Thumbnail height */
	public int $thumb_height;
}

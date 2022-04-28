<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos extends \Tii\Telepath\Type
{
	/** Total number of profile pictures the target user has */
	public int $total_count;

	/**
	 * Requested profile pictures (in up to 4 sizes each)
	 * @var PhotoSize[][]
	 */
	public array $photos;
}

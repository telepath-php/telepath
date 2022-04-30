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


	/**
	 * @param int $total_count Total number of profile pictures the target user has
	 * @param PhotoSize[][] $photos Requested profile pictures (in up to 4 sizes each)
	 */
	public static function make(int $total_count, array $photos): static
	{
		return new static([
		    'total_count' => $total_count,
		    'photos' => $photos,
		]);
	}
}

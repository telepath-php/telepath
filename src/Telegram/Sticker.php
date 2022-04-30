<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a sticker.
 */
class Sticker extends \Tii\Telepath\Type
{
	/** Identifier for this file, which can be used to download or reuse the file */
	public string $file_id;

	/** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $file_unique_id;

	/** Sticker width */
	public int $width;

	/** Sticker height */
	public int $height;

	/** True, if the sticker is animated */
	public bool $is_animated;

	/** True, if the sticker is a video sticker */
	public bool $is_video;

	/** Optional. Sticker thumbnail in the .WEBP or .JPG format */
	public ?PhotoSize $thumb = null;

	/** Optional. Emoji associated with the sticker */
	public ?string $emoji = null;

	/** Optional. Name of the sticker set to which the sticker belongs */
	public ?string $set_name = null;

	/** Optional. For mask stickers, the position where the mask should be placed */
	public ?MaskPosition $mask_position = null;

	/** Optional. File size in bytes */
	public ?int $file_size = null;


	/**
	 * @param string $file_id Identifier for this file, which can be used to download or reuse the file
	 * @param string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 * @param int $width Sticker width
	 * @param int $height Sticker height
	 * @param bool $is_animated True, if the sticker is animated
	 * @param bool $is_video True, if the sticker is a video sticker
	 * @param PhotoSize $thumb Optional. Sticker thumbnail in the .WEBP or .JPG format
	 * @param string $emoji Optional. Emoji associated with the sticker
	 * @param string $set_name Optional. Name of the sticker set to which the sticker belongs
	 * @param MaskPosition $mask_position Optional. For mask stickers, the position where the mask should be placed
	 * @param int $file_size Optional. File size in bytes
	 */
	public static function make(
		string $file_id,
		string $file_unique_id,
		int $width,
		int $height,
		bool $is_animated,
		bool $is_video,
		?PhotoSize $thumb = null,
		?string $emoji = null,
		?string $set_name = null,
		?MaskPosition $mask_position = null,
		?int $file_size = null
	): static {
		return new static([
		    'file_id' => $file_id,
		    'file_unique_id' => $file_unique_id,
		    'width' => $width,
		    'height' => $height,
		    'is_animated' => $is_animated,
		    'is_video' => $is_video,
		    'thumb' => $thumb,
		    'emoji' => $emoji,
		    'set_name' => $set_name,
		    'mask_position' => $mask_position,
		    'file_size' => $file_size,
		]);
	}
}

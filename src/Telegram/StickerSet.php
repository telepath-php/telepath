<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a sticker set.
 */
class StickerSet extends \Tii\Telepath\Type
{
	/** Sticker set name */
	public string $name;

	/** Sticker set title */
	public string $title;

	/** True, if the sticker set contains animated stickers */
	public bool $is_animated;

	/** True, if the sticker set contains video stickers */
	public bool $is_video;

	/** True, if the sticker set contains masks */
	public bool $contains_masks;

	/**
	 * List of all set stickers
	 * @var Sticker[]
	 */
	public array $stickers;

	/** Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
	public PhotoSize $thumb;
}

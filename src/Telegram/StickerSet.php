<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class StickerSet extends \Tii\Telepath\Type
{
	public string $name;
	public string $title;
	public bool $is_animated;
	public bool $is_video;
	public bool $contains_masks;

	/** @var Sticker[] */
	public array $stickers;
	public PhotoSize $thumb;
}

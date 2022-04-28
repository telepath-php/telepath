<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

class InputMediaAnimation extends InputMedia
{
	public string $type;
	public string $media;
	public InputFile|string $thumb;
	public string $caption;
	public string $parse_mode;

	/** @var MessageEntity[] */
	public array $caption_entities;
	public int $width;
	public int $height;
	public int $duration;
}

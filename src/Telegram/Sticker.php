<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Sticker extends \Tii\Telepath\Type
{
    public string $file_id;

    public string $file_unique_id;

    public int $width;

    public int $height;

    public bool $is_animated;

    public bool $is_video;

    public PhotoSize $thumb;

    public string $emoji;

    public string $set_name;

    public MaskPosition $mask_position;

    public int $file_size;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


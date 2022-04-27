<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class UserProfilePhotos extends \Tii\Telepath\Type
{
    public int $total_count;

    /**
     * @var PhotoSize[][]
     */
    public array $photos;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


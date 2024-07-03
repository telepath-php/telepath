<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The paid media is a photo.
 */
class PaidMediaPhoto extends PaidMedia
{
    /** Type of the paid media, always “photo” */
    public string $type = 'photo';

    /**
     * The photo
     *
     * @var PhotoSize[]
     */
    public array $photo;

    /**
     * @param  PhotoSize[]  $photo  The photo
     */
    public static function make(array $photo): static
    {
        return new static([
            'photo' => $photo,
        ]);
    }
}

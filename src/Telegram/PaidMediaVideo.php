<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The paid media is a video.
 */
class PaidMediaVideo extends PaidMedia
{
    /** Type of the paid media, always “video” */
    public string $type = 'video';

    /** The video */
    public Video $video;

    /**
     * @param  Video  $video  The video
     */
    public static function make(Video $video): static
    {
        return new static([
            'video' => $video,
        ]);
    }
}

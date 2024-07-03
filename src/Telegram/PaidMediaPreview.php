<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The paid media isn't available before the payment.
 */
class PaidMediaPreview extends PaidMedia
{
    /** Type of the paid media, always “preview” */
    public string $type = 'preview';

    /** <em>Optional</em>. Media width as defined by the sender */
    public ?int $width = null;

    /** <em>Optional</em>. Media height as defined by the sender */
    public ?int $height = null;

    /** <em>Optional</em>. Duration of the media in seconds as defined by the sender */
    public ?int $duration = null;

    /**
     * @param  int  $width  <em>Optional</em>. Media width as defined by the sender
     * @param  int  $height  <em>Optional</em>. Media height as defined by the sender
     * @param  int  $duration  <em>Optional</em>. Duration of the media in seconds as defined by the sender
     */
    public static function make(?int $width = null, ?int $height = null, ?int $duration = null): static
    {
        return new static([
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
        ]);
    }
}

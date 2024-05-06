<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is a wallpaper in the JPEG format.
 */
class BackgroundTypeWallpaper extends BackgroundType
{
    /** Type of the background, always “wallpaper” */
    public string $type = 'wallpaper';

    /** Document with the wallpaper */
    public Document $document;

    /** Dimming of the background in dark themes, as a percentage; 0-100 */
    public int $dark_theme_dimming;

    /** <em>Optional</em>. <em>True</em>, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12 */
    public ?bool $is_blurred = null;

    /** <em>Optional</em>. <em>True</em>, if the background moves slightly when the device is tilted */
    public ?bool $is_moving = null;

    /**
     * @param  Document  $document  Document with the wallpaper
     * @param  int  $dark_theme_dimming  Dimming of the background in dark themes, as a percentage; 0-100
     * @param  bool  $is_blurred  <em>Optional</em>. <em>True</em>, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     * @param  bool  $is_moving  <em>Optional</em>. <em>True</em>, if the background moves slightly when the device is tilted
     */
    public static function make(
        Document $document,
        int $dark_theme_dimming,
        ?bool $is_blurred = null,
        ?bool $is_moving = null,
    ): static {
        return new static([
            'document' => $document,
            'dark_theme_dimming' => $dark_theme_dimming,
            'is_blurred' => $is_blurred,
            'is_moving' => $is_moving,
        ]);
    }
}

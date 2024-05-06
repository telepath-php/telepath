<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 */
class BackgroundTypePattern extends BackgroundType
{
    /** Type of the background, always “pattern” */
    public string $type = 'pattern';

    /** Document with the pattern */
    public Document $document;

    /** The background fill that is combined with the pattern */
    public BackgroundFill $fill;

    /** Intensity of the pattern when it is shown above the filled background; 0-100 */
    public int $intensity;

    /** <em>Optional</em>. <em>True</em>, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only */
    public ?bool $is_inverted = null;

    /** <em>Optional</em>. <em>True</em>, if the background moves slightly when the device is tilted */
    public ?bool $is_moving = null;

    /**
     * @param  Document  $document  Document with the pattern
     * @param  BackgroundFill  $fill  The background fill that is combined with the pattern
     * @param  int  $intensity  Intensity of the pattern when it is shown above the filled background; 0-100
     * @param  bool  $is_inverted  <em>Optional</em>. <em>True</em>, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     * @param  bool  $is_moving  <em>Optional</em>. <em>True</em>, if the background moves slightly when the device is tilted
     */
    public static function make(
        Document $document,
        BackgroundFill $fill,
        int $intensity,
        ?bool $is_inverted = null,
        ?bool $is_moving = null,
    ): static {
        return new static([
            'document' => $document,
            'fill' => $fill,
            'intensity' => $intensity,
            'is_inverted' => $is_inverted,
            'is_moving' => $is_moving,
        ]);
    }
}

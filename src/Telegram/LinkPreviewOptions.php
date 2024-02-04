<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the options used for link preview generation.
 */
class LinkPreviewOptions extends Type
{
    /** <em>Optional</em>. <em>True</em>, if the link preview is disabled */
    public ?bool $is_disabled = null;

    /** <em>Optional</em>. URL to use for the link preview. If empty, then the first URL found in the message text will be used */
    public ?string $url = null;

    /** <em>Optional</em>. <em>True</em>, if the media in the link preview is suppposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview */
    public ?bool $prefer_small_media = null;

    /** <em>Optional</em>. <em>True</em>, if the media in the link preview is suppposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview */
    public ?bool $prefer_large_media = null;

    /** <em>Optional</em>. <em>True</em>, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text */
    public ?bool $show_above_text = null;

    /**
     * @param  bool  $is_disabled <em>Optional</em>. <em>True</em>, if the link preview is disabled
     * @param  string  $url <em>Optional</em>. URL to use for the link preview. If empty, then the first URL found in the message text will be used
     * @param  bool  $prefer_small_media <em>Optional</em>. <em>True</em>, if the media in the link preview is suppposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param  bool  $prefer_large_media <em>Optional</em>. <em>True</em>, if the media in the link preview is suppposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param  bool  $show_above_text <em>Optional</em>. <em>True</em>, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
     */
    public static function make(
        bool $is_disabled = null,
        string $url = null,
        bool $prefer_small_media = null,
        bool $prefer_large_media = null,
        bool $show_above_text = null,
    ): static {
        return new static([
            'is_disabled' => $is_disabled,
            'url' => $url,
            'prefer_small_media' => $prefer_small_media,
            'prefer_large_media' => $prefer_large_media,
            'show_above_text' => $show_above_text,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;

/**
 * An animated profile photo in the MPEG4 format.
 */
class InputProfilePhotoAnimated extends InputProfilePhoto
{
    /** Type of the profile photo, must be <em>animated</em> */
    public string $type = 'animated';

    /** The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public string|InputFile $animation;

    /** <em>Optional</em>. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0. */
    public ?float $main_frame_timestamp = null;

    /**
     * @param  string|InputFile  $animation  The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  float  $main_frame_timestamp  <em>Optional</em>. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
     */
    public static function make(string|InputFile $animation, ?float $main_frame_timestamp = null): static
    {
        return new static([
            'animation' => $animation,
            'main_frame_timestamp' => $main_frame_timestamp,
        ]);
    }
}

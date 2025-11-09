<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;

/**
 * A static profile photo in the .JPG format.
 */
class InputProfilePhotoStatic extends InputProfilePhoto
{
    /** Type of the profile photo, must be <em>static</em> */
    public string $type = 'static';

    /** The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public string|InputFile $photo;

    /**
     * @param  string|InputFile  $photo  The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     */
    public static function make(string|InputFile $photo): static
    {
        return new static([
            'photo' => $photo,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;

/**
 * The paid media to send is a photo.
 */
class InputPaidMediaPhoto extends InputPaidMedia
{
    /** Type of the media, must be <em>photo</em> */
    public string $type = 'photo';

    /**
     * @param  string|InputFile  $media  File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     */
    public static function make(string|InputFile $media): static
    {
        return new static([
            'media' => $media,
        ]);
    }
}

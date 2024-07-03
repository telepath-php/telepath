<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Files\InputFile;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the paid media to be sent. Currently, it can be one of
 */
abstract class InputPaidMedia extends Type implements Factory
{
    /** Type of the media */
    public string $type;

    /** File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public string|InputFile $media;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'photo' => new InputPaidMediaPhoto($data, $bot),
            'video' => new InputPaidMediaVideo($data, $bot),
        };
    }
}

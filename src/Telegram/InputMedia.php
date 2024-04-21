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
 * This object represents the content of a media message to be sent. It should be one of
 */
abstract class InputMedia extends Type implements Factory
{
    /** Type of the result */
    public string $type;

    /** File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public string|InputFile $media;

    /** <em>Optional</em>. Caption of the animation to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the animation caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    public static function factory(array $data, ?Bot $bot = null): self
    {
        return match ($data['type']) {
            'animation' => new InputMediaAnimation($data, $bot),
            'document' => new InputMediaDocument($data, $bot),
            'audio' => new InputMediaAudio($data, $bot),
            'photo' => new InputMediaPhoto($data, $bot),
            'video' => new InputMediaVideo($data, $bot),
        };
    }
}

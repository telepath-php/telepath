<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the content of a media message to be sent. It should be one of
 */
abstract class InputMedia extends \Tii\Telepath\Types\Type
{
    /** Type of the result */
    public string $type;

    /** File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files » */
    public string $media;

    /** Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the animation caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    public static function factory(array $data): static
    {
        return match($data['type']) {
            'animation' => new InputMediaAnimation($data)
            'document' => new InputMediaDocument($data)
            'audio' => new InputMediaAudio($data)
            'photo' => new InputMediaPhoto($data)
            'video' => new InputMediaVideo($data)
        };
    }
}

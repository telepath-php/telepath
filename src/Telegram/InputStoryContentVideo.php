<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;

/**
 * Describes a video to post as a story.
 */
class InputStoryContentVideo extends InputStoryContent
{
    /** Type of the content, must be <em>video</em> */
    public string $type = 'video';

    /** The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public string|InputFile $video;

    /** <em>Optional</em>. Precise duration of the video in seconds; 0-60 */
    public ?float $duration = null;

    /** <em>Optional</em>. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0. */
    public ?float $cover_frame_timestamp = null;

    /** <em>Optional</em>. Pass <em>True</em> if the video has no sound */
    public ?bool $is_animation = null;

    /**
     * @param  string|InputFile  $video  The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  float  $duration  <em>Optional</em>. Precise duration of the video in seconds; 0-60
     * @param  float  $cover_frame_timestamp  <em>Optional</em>. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
     * @param  bool  $is_animation  <em>Optional</em>. Pass <em>True</em> if the video has no sound
     */
    public static function make(
        string|InputFile $video,
        ?float $duration = null,
        ?float $cover_frame_timestamp = null,
        ?bool $is_animation = null,
    ): static {
        return new static([
            'video' => $video,
            'duration' => $duration,
            'cover_frame_timestamp' => $cover_frame_timestamp,
            'is_animation' => $is_animation,
        ]);
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents the audios displayed on a user's profile.
 */
class UserProfileAudios extends Type
{
    /** Total number of profile audios for the target user */
    public int $total_count;

    /**
     * Requested profile audios
     *
     * @var Audio[]
     */
    public array $audios;

    /**
     * @param  int  $total_count  Total number of profile audios for the target user
     * @param  Audio[]  $audios  Requested profile audios
     */
    public static function make(int $total_count, array $audios): static
    {
        return new static([
            'total_count' => $total_count,
            'audios' => $audios,
        ]);
    }
}

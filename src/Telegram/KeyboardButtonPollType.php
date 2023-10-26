<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
class KeyboardButtonPollType extends Type
{
    /** <em>Optional</em>. If <em>quiz</em> is passed, the user will be allowed to create only polls in the quiz mode. If <em>regular</em> is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type. */
    public ?string $type = null;

    /**
     * @param string $type <em>Optional</em>. If <em>quiz</em> is passed, the user will be allowed to create only polls in the quiz mode. If <em>regular</em> is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     */
    public static function make(?string $type = null): static
    {
        return new static([
            'type' => $type,
        ]);
    }
}

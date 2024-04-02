<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

class BusinessIntro extends Type
{
    /** <em>Optional</em>. Title text of the business intro */
    public ?string $title = null;

    /** <em>Optional</em>. Message text of the business intro */
    public ?string $message = null;

    /** <em>Optional</em>. Sticker of the business intro */
    public ?Sticker $sticker = null;

    /**
     * @param  string  $title  <em>Optional</em>. Title text of the business intro
     * @param  string  $message  <em>Optional</em>. Message text of the business intro
     * @param  Sticker  $sticker  <em>Optional</em>. Sticker of the business intro
     */
    public static function make(?string $title = null, ?string $message = null, ?Sticker $sticker = null): static
    {
        return new static([
            'title' => $title,
            'message' => $message,
            'sticker' => $sticker,
        ]);
    }
}

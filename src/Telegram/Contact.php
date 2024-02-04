<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a phone contact.
 */
class Contact extends Type
{
    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** <em>Optional</em>. Contact's last name */
    public ?string $last_name = null;

    /** <em>Optional</em>. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $user_id = null;

    /** <em>Optional</em>. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a> */
    public ?string $vcard = null;

    /**
     * @param  string  $phone_number  Contact's phone number
     * @param  string  $first_name  Contact's first name
     * @param  string  $last_name  <em>Optional</em>. Contact's last name
     * @param  int  $user_id  <em>Optional</em>. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  string  $vcard  <em>Optional</em>. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>
     */
    public static function make(
        string $phone_number,
        string $first_name,
        ?string $last_name = null,
        ?int $user_id = null,
        ?string $vcard = null,
    ): static {
        return new static([
            'phone_number' => $phone_number,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_id' => $user_id,
            'vcard' => $vcard,
        ]);
    }
}

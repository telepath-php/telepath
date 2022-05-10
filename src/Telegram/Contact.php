<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a phone contact.
 */
class Contact extends \Tii\Telepath\Types\Type
{
    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** Optional. Contact's last name */
    public ?string $last_name = null;

    /** Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $user_id = null;

    /** Optional. Additional data about the contact in the form of a vCard */
    public ?string $vcard = null;

    /**
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param string $last_name Optional. Contact's last name
     * @param int $user_id Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string $vcard Optional. Additional data about the contact in the form of a vCard
     */
    public static function make(
        string $phone_number,
        string $first_name,
        ?string $last_name = null,
        ?int $user_id = null,
        ?string $vcard = null
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

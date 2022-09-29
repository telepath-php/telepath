<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent extends InputMessageContent
{
    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** Optional. Contact's last name */
    public ?string $last_name = null;

    /** Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes */
    public ?string $vcard = null;

    /**
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param string $last_name Optional. Contact's last name
     * @param string $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    public static function make(
        string $phone_number,
        string $first_name,
        ?string $last_name = null,
        ?string $vcard = null
    ): static {
        return new static([
            'phone_number' => $phone_number,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'vcard' => $vcard,
        ]);
    }
}

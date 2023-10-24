<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
    /** Type of the result, must be <em>contact</em> */
    public string $type = 'contact';

    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** <em>Optional</em>. Contact's last name */
    public ?string $last_name = null;

    /** <em>Optional</em>. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes */
    public ?string $vcard = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the contact */
    public ?InputMessageContent $input_message_content = null;

    /** <em>Optional</em>. Url of the thumbnail for the result */
    public ?string $thumbnail_url = null;

    /** <em>Optional</em>. Thumbnail width */
    public ?int $thumbnail_width = null;

    /** <em>Optional</em>. Thumbnail height */
    public ?int $thumbnail_height = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 Bytes
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param string $last_name <em>Optional</em>. Contact's last name
     * @param string $vcard <em>Optional</em>. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes
     * @param InlineKeyboardMarkup $reply_markup <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param InputMessageContent $input_message_content <em>Optional</em>. Content of the message to be sent instead of the contact
     * @param string $thumbnail_url <em>Optional</em>. Url of the thumbnail for the result
     * @param int $thumbnail_width <em>Optional</em>. Thumbnail width
     * @param int $thumbnail_height <em>Optional</em>. Thumbnail height
     */
    public static function make(
        string $id,
        string $phone_number,
        string $first_name,
        ?string $last_name = null,
        ?string $vcard = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
        ?string $thumbnail_url = null,
        ?int $thumbnail_width = null,
        ?int $thumbnail_height = null,
    ): static
    {
        return new static([
            'id' => $id,
            'phone_number' => $phone_number,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'vcard' => $vcard,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
            'thumbnail_url' => $thumbnail_url,
            'thumbnail_width' => $thumbnail_width,
            'thumbnail_height' => $thumbnail_height,
        ]);
    }
}

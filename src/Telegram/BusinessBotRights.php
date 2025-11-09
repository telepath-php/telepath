<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents the rights of a business bot.
 */
class BusinessBotRights extends Type
{
    /** <em>Optional</em>. <em>True</em>, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours */
    public ?bool $can_reply = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can mark incoming private messages as read */
    public ?bool $can_read_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can delete messages sent by the bot */
    public ?bool $can_delete_sent_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can delete all private messages in managed chats */
    public ?bool $can_delete_all_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can edit the first and last name of the business account */
    public ?bool $can_edit_name = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can edit the bio of the business account */
    public ?bool $can_edit_bio = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can edit the profile photo of the business account */
    public ?bool $can_edit_profile_photo = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can edit the username of the business account */
    public ?bool $can_edit_username = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can change the privacy settings pertaining to gifts for the business account */
    public ?bool $can_change_gift_settings = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can view gifts and the amount of Telegram Stars owned by the business account */
    public ?bool $can_view_gifts_and_stars = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can convert regular gifts owned by the business account to Telegram Stars */
    public ?bool $can_convert_gifts_to_stars = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can transfer and upgrade gifts owned by the business account */
    public ?bool $can_transfer_and_upgrade_gifts = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts */
    public ?bool $can_transfer_stars = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can post, edit and delete stories on behalf of the business account */
    public ?bool $can_manage_stories = null;

    /**
     * @param  bool  $can_reply  <em>Optional</em>. <em>True</em>, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     * @param  bool  $can_read_messages  <em>Optional</em>. <em>True</em>, if the bot can mark incoming private messages as read
     * @param  bool  $can_delete_sent_messages  <em>Optional</em>. <em>True</em>, if the bot can delete messages sent by the bot
     * @param  bool  $can_delete_all_messages  <em>Optional</em>. <em>True</em>, if the bot can delete all private messages in managed chats
     * @param  bool  $can_edit_name  <em>Optional</em>. <em>True</em>, if the bot can edit the first and last name of the business account
     * @param  bool  $can_edit_bio  <em>Optional</em>. <em>True</em>, if the bot can edit the bio of the business account
     * @param  bool  $can_edit_profile_photo  <em>Optional</em>. <em>True</em>, if the bot can edit the profile photo of the business account
     * @param  bool  $can_edit_username  <em>Optional</em>. <em>True</em>, if the bot can edit the username of the business account
     * @param  bool  $can_change_gift_settings  <em>Optional</em>. <em>True</em>, if the bot can change the privacy settings pertaining to gifts for the business account
     * @param  bool  $can_view_gifts_and_stars  <em>Optional</em>. <em>True</em>, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     * @param  bool  $can_convert_gifts_to_stars  <em>Optional</em>. <em>True</em>, if the bot can convert regular gifts owned by the business account to Telegram Stars
     * @param  bool  $can_transfer_and_upgrade_gifts  <em>Optional</em>. <em>True</em>, if the bot can transfer and upgrade gifts owned by the business account
     * @param  bool  $can_transfer_stars  <em>Optional</em>. <em>True</em>, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     * @param  bool  $can_manage_stories  <em>Optional</em>. <em>True</em>, if the bot can post, edit and delete stories on behalf of the business account
     */
    public static function make(
        ?bool $can_reply = null,
        ?bool $can_read_messages = null,
        ?bool $can_delete_sent_messages = null,
        ?bool $can_delete_all_messages = null,
        ?bool $can_edit_name = null,
        ?bool $can_edit_bio = null,
        ?bool $can_edit_profile_photo = null,
        ?bool $can_edit_username = null,
        ?bool $can_change_gift_settings = null,
        ?bool $can_view_gifts_and_stars = null,
        ?bool $can_convert_gifts_to_stars = null,
        ?bool $can_transfer_and_upgrade_gifts = null,
        ?bool $can_transfer_stars = null,
        ?bool $can_manage_stories = null,
    ): static {
        return new static([
            'can_reply' => $can_reply,
            'can_read_messages' => $can_read_messages,
            'can_delete_sent_messages' => $can_delete_sent_messages,
            'can_delete_all_messages' => $can_delete_all_messages,
            'can_edit_name' => $can_edit_name,
            'can_edit_bio' => $can_edit_bio,
            'can_edit_profile_photo' => $can_edit_profile_photo,
            'can_edit_username' => $can_edit_username,
            'can_change_gift_settings' => $can_change_gift_settings,
            'can_view_gifts_and_stars' => $can_view_gifts_and_stars,
            'can_convert_gifts_to_stars' => $can_convert_gifts_to_stars,
            'can_transfer_and_upgrade_gifts' => $can_transfer_and_upgrade_gifts,
            'can_transfer_stars' => $can_transfer_stars,
            'can_manage_stories' => $can_manage_stories,
        ]);
    }
}

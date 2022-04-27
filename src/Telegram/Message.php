<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Message extends \Tii\Telepath\Type
{
    public readonly int $message_id;

    public readonly User $from;

    public readonly Chat $sender_chat;

    public readonly int $date;

    public readonly Chat $chat;

    public readonly User $forward_from;

    public readonly Chat $forward_from_chat;

    public readonly int $forward_from_message_id;

    public readonly string $forward_signature;

    public readonly string $forward_sender_name;

    public readonly int $forward_date;

    public readonly bool $is_automatic_forward;

    public readonly Message $reply_to_message;

    public readonly User $via_bot;

    public readonly int $edit_date;

    public readonly bool $has_protected_content;

    public readonly string $media_group_id;

    public readonly string $author_signature;

    public readonly string $text;

    /**
     * @var MessageEntity[]
     */
    public readonly array $entities;

    public readonly Animation $animation;

    public readonly Audio $audio;

    public readonly Document $document;

    /**
     * @var PhotoSize[]
     */
    public readonly array $photo;

    public readonly Sticker $sticker;

    public readonly Video $video;

    public readonly VideoNote $video_note;

    public readonly Voice $voice;

    public readonly string $caption;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly Contact $contact;

    public readonly Dice $dice;

    public readonly Game $game;

    public readonly Poll $poll;

    public readonly Venue $venue;

    public readonly Location $location;

    /**
     * @var User[]
     */
    public readonly array $new_chat_members;

    public readonly User $left_chat_member;

    public readonly string $new_chat_title;

    /**
     * @var PhotoSize[]
     */
    public readonly array $new_chat_photo;

    public readonly bool $delete_chat_photo;

    public readonly bool $group_chat_created;

    public readonly bool $supergroup_chat_created;

    public readonly bool $channel_chat_created;

    public readonly MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed;

    public readonly int $migrate_to_chat_id;

    public readonly int $migrate_from_chat_id;

    public readonly Message $pinned_message;

    public readonly Invoice $invoice;

    public readonly SuccessfulPayment $successful_payment;

    public readonly string $connected_website;

    public readonly PassportData $passport_data;

    public readonly ProximityAlertTriggered $proximity_alert_triggered;

    public readonly VideoChatScheduled $video_chat_scheduled;

    public readonly VideoChatStarted $video_chat_started;

    public readonly VideoChatEnded $video_chat_ended;

    public readonly VideoChatParticipantsInvited $video_chat_participants_invited;

    public readonly WebAppData $web_app_data;

    public readonly InlineKeyboardMarkup $reply_markup;
}


<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Message extends \Tii\Telepath\Type
{
    public int $message_id;

    public User $from;

    public Chat $sender_chat;

    public int $date;

    public Chat $chat;

    public User $forward_from;

    public Chat $forward_from_chat;

    public int $forward_from_message_id;

    public string $forward_signature;

    public string $forward_sender_name;

    public int $forward_date;

    public bool $is_automatic_forward;

    public Message $reply_to_message;

    public User $via_bot;

    public int $edit_date;

    public bool $has_protected_content;

    public string $media_group_id;

    public string $author_signature;

    public string $text;

    /**
     * @var MessageEntity[]
     */
    public array $entities;

    public Animation $animation;

    public Audio $audio;

    public Document $document;

    /**
     * @var PhotoSize[]
     */
    public array $photo;

    public Sticker $sticker;

    public Video $video;

    public VideoNote $video_note;

    public Voice $voice;

    public string $caption;

    /**
     * @var MessageEntity[]
     */
    public array $caption_entities;

    public Contact $contact;

    public Dice $dice;

    public Game $game;

    public Poll $poll;

    public Venue $venue;

    public Location $location;

    /**
     * @var User[]
     */
    public array $new_chat_members;

    public User $left_chat_member;

    public string $new_chat_title;

    /**
     * @var PhotoSize[]
     */
    public array $new_chat_photo;

    public bool $delete_chat_photo;

    public bool $group_chat_created;

    public bool $supergroup_chat_created;

    public bool $channel_chat_created;

    public MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed;

    public int $migrate_to_chat_id;

    public int $migrate_from_chat_id;

    public Message $pinned_message;

    public Invoice $invoice;

    public SuccessfulPayment $successful_payment;

    public string $connected_website;

    public PassportData $passport_data;

    public ProximityAlertTriggered $proximity_alert_triggered;

    public VideoChatScheduled $video_chat_scheduled;

    public VideoChatStarted $video_chat_started;

    public VideoChatEnded $video_chat_ended;

    public VideoChatParticipantsInvited $video_chat_participants_invited;

    public WebAppData $web_app_data;

    public InlineKeyboardMarkup $reply_markup;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}


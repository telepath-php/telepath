<?php

namespace Telepath\Handlers\Message;

use Attribute;
use Telepath\Handlers\Message;
use Telepath\Telegram\Update;
use Telepath\TelegramBot;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class MessageType extends Message
{

    public const TEXT = 'text';
    public const AUDIO = 'audio';
    public const DOCUMENT = 'document';
    public const ANIMATION = 'animation';
    public const GAME = 'game';
    public const PHOTO = 'photo';
    public const STICKER = 'sticker';
    public const VIDEO = 'video';
    public const VOICE = 'voice';
    public const VIDEO_NOTE = 'video_note';
    public const CONTACT = 'contact';
    public const LOCATION = 'location';
    public const VENUE = 'venue';
    public const POLL = 'poll';
    public const DICE = 'dice';
    public const NEW_CHAT_MEMBERS = 'new_chat_members';
    public const LEFT_CHAT_MEMBER = 'left_chat_member';
    public const NEW_CHAT_TITLE = 'new_chat_title';
    public const NEW_CHAT_PHOTO = 'new_chat_photo';
    public const DELETE_CHAT_PHOTO = 'delete_chat_photo';
    public const GROUP_CHAT_CREATED = 'group_chat_created';
    public const SUPERGROUP_CHAT_CREATED = 'supergroup_chat_created';
    public const CHANNEL_CHAT_CREATED = 'channel_chat_created';
    public const MIGRATE_TO_CHAT_ID = 'migrate_to_chat_id';
    public const MIGRATE_FROM_CHAT_ID = 'migrate_from_chat_id';
    public const PINNED_MESSAGE = 'pinned_message';
    public const INVOICE = 'invoice';
    public const SUCCESSFUL_PAYMENT = 'successful_payment';
    public const MESSAGE_AUTO_DELETE_TIMER_CHANGED = 'message_auto_delete_timer_changed';
    public const CONNECTED_WEBSITE = 'connected_website';
    public const PROXIMITY_ALERT_TRIGGERED = 'proximity_alert_triggered';
    public const VIDEO_CHAT_SCHEDULED = 'video_chat_scheduled';
    public const VIDEO_CHAT_STARTED = 'video_chat_started';
    public const VIDEO_CHAT_ENDED = 'video_chat_ended';
    public const VIDEO_CHAT_PARTICIPANTS_INVITED = 'video_chat_participants_invited';

    public function __construct(
        protected string $type,
        int $priority = 2,
    ) {
        parent::__construct($priority);
    }

    public function responsible(TelegramBot $bot, Update $update): bool
    {
        if (! parent::responsible($bot, $update)) {
            return false;
        }

        return $update->message->{$this->type} !== null;
    }

}
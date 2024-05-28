<?php

namespace Telepath\Handlers\Message;

use Attribute;
use Telepath\Bot;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class MessageType extends Message
{
    public const TEXT = 'text';

    public const ANIMATION = 'animation';

    public const AUDIO = 'audio';

    public const DOCUMENT = 'document';

    public const PHOTO = 'photo';

    public const STICKER = 'sticker';

    public const STORY = 'story';

    public const VIDEO = 'video';

    public const VIDEO_NOTE = 'video_note';

    public const VOICE = 'voice';

    public const CONTACT = 'contact';

    public const DICE = 'dice';

    public const GAME = 'game';

    public const POLL = 'poll';

    public const VENUE = 'venue';

    public const LOCATION = 'location';

    public const NEW_CHAT_MEMBERS = 'new_chat_members';

    public const LEFT_CHAT_MEMBER = 'left_chat_member';

    public const NEW_CHAT_TITLE = 'new_chat_title';

    public const NEW_CHAT_PHOTO = 'new_chat_photo';

    public const DELETE_CHAT_PHOTO = 'delete_chat_photo';

    public const GROUP_CHAT_CREATED = 'group_chat_created';

    public const SUPERGROUP_CHAT_CREATED = 'supergroup_chat_created';

    public const CHANNEL_CHAT_CREATED = 'channel_chat_created';

    public const MESSAGE_AUTO_DELETE_TIMER_CHANGED = 'message_auto_delete_timer_changed';

    public const MIGRATE_TO_CHAT_ID = 'migrate_to_chat_id';

    public const MIGRATE_FROM_CHAT_ID = 'migrate_from_chat_id';

    public const PINNED_MESSAGE = 'pinned_message';

    public const INVOICE = 'invoice';

    public const SUCCESSFUL_PAYMENT = 'successful_payment';

    public const USER_SHARED = 'user_shared';

    public const CHAT_SHARED = 'chat_shared';

    public const WRITE_ACCESS_ALLOWED = 'write_access_allowed';

    public const PROXIMITY_ALERT_TRIGGERED = 'proximity_alert_triggered';

    public const BOOST_ADDED = 'boost_added';

    public const FORUM_TOPIC_CREATED = 'forum_topic_created';

    public const FORUM_TOPIC_EDITED = 'forum_topic_edited';

    public const FORUM_TOPIC_CLOSED = 'forum_topic_closed';

    public const FORUM_TOPIC_REOPENED = 'forum_topic_reopened';

    public const GENERAL_FORUM_TOPIC_HIDDEN = 'general_forum_topic_hidden';

    public const GENERAL_FORUM_TOPIC_UNHIDDEN = 'general_forum_topic_unhidden';

    public const GIVEAWAY_CREATED = 'giveaway_created';

    public const GIVEAWAY_WINNERS = 'giveaway_winners';

    public const GIVEAWAY_COMPLETED = 'giveaway_completed';

    public const VIDEO_CHAT_SCHEDULED = 'video_chat_scheduled';

    public const VIDEO_CHAT_STARTED = 'video_chat_started';

    public const VIDEO_CHAT_ENDED = 'video_chat_ended';

    public const VIDEO_CHAT_PARTICIPANTS_INVITED = 'video_chat_participants_invited';

    public const WEB_APP_DATA = 'web_app_data';

    public function __construct(
        protected string $type
    ) {
    }

    public function responsible(Bot $bot, Update $update): bool
    {
        if (! parent::responsible($bot, $update)) {
            return false;
        }

        return $update->message->{$this->type} !== null;
    }
}

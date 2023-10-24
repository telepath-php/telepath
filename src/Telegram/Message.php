<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Extensions\MessageExtension;
use Telepath\Types\Type;

/**
 * This object represents a message.
 */
class Message extends Type
{
    use MessageExtension;

    /** Unique message identifier inside this chat */
    public int $message_id;

    /** Date the message was sent in Unix time */
    public int $date;

    /** Conversation the message belongs to */
    public Chat $chat;

    /** Optional. Unique identifier of a message thread to which the message belongs; for supergroups only */
    public ?int $message_thread_id = null;

    /** Optional. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat. */
    public ?User $from = null;

    /** Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat. */
    public ?Chat $sender_chat = null;

    /** Optional. For forwarded messages, sender of the original message */
    public ?User $forward_from = null;

    /** Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat */
    public ?Chat $forward_from_chat = null;

    /** Optional. For messages forwarded from channels, identifier of the original message in the channel */
    public ?int $forward_from_message_id = null;

    /** Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present */
    public ?string $forward_signature = null;

    /** Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages */
    public ?string $forward_sender_name = null;

    /** Optional. For forwarded messages, date the original message was sent in Unix time */
    public ?int $forward_date = null;

    /** Optional. True, if the message is sent to a forum topic */
    public ?bool $is_topic_message = null;

    /** Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group */
    public ?bool $is_automatic_forward = null;

    /** Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?Message $reply_to_message = null;

    /** Optional. Bot through which the message was sent */
    public ?User $via_bot = null;

    /** Optional. Date the message was last edited in Unix time */
    public ?int $edit_date = null;

    /** Optional. True, if the message can't be forwarded */
    public ?bool $has_protected_content = null;

    /** Optional. The unique identifier of a media message group this message belongs to */
    public ?string $media_group_id = null;

    /** Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator */
    public ?string $author_signature = null;

    /** Optional. For text messages, the actual UTF-8 text of the message */
    public ?string $text = null;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set */
    public ?Animation $animation = null;

    /** Optional. Message is an audio file, information about the file */
    public ?Audio $audio = null;

    /** Optional. Message is a general file, information about the file */
    public ?Document $document = null;

    /**
     * Optional. Message is a photo, available sizes of the photo
     * @var PhotoSize[]
     */
    public ?array $photo = null;

    /** Optional. Message is a sticker, information about the sticker */
    public ?Sticker $sticker = null;

    /** Optional. Message is a forwarded story */
    public ?Story $story = null;

    /** Optional. Message is a video, information about the video */
    public ?Video $video = null;

    /** Optional. Message is a video note, information about the video message */
    public ?VideoNote $video_note = null;

    /** Optional. Message is a voice message, information about the file */
    public ?Voice $voice = null;

    /** Optional. Caption for the animation, audio, document, photo, video or voice */
    public ?string $caption = null;

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. True, if the message media is covered by a spoiler animation */
    public ?bool $has_media_spoiler = null;

    /** Optional. Message is a shared contact, information about the contact */
    public ?Contact $contact = null;

    /** Optional. Message is a dice with random value */
    public ?Dice $dice = null;

    /** Optional. Message is a game, information about the game. More about games » */
    public ?Game $game = null;

    /** Optional. Message is a native poll, information about the poll */
    public ?Poll $poll = null;

    /** Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set */
    public ?Venue $venue = null;

    /** Optional. Message is a shared location, information about the location */
    public ?Location $location = null;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @var User[]
     */
    public ?array $new_chat_members = null;

    /** Optional. A member was removed from the group, information about them (this member may be the bot itself) */
    public ?User $left_chat_member = null;

    /** Optional. A chat title was changed to this value */
    public ?string $new_chat_title = null;

    /**
     * Optional. A chat photo was change to this value
     * @var PhotoSize[]
     */
    public ?array $new_chat_photo = null;

    /** Optional. Service message: the chat photo was deleted */
    public ?bool $delete_chat_photo = null;

    /** Optional. Service message: the group has been created */
    public ?bool $group_chat_created = null;

    /** Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
    public ?bool $supergroup_chat_created = null;

    /** Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
    public ?bool $channel_chat_created = null;

    /** Optional. Service message: auto-delete timer settings changed in the chat */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;

    /** Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_to_chat_id = null;

    /** Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_from_chat_id = null;

    /** Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply. */
    public ?Message $pinned_message = null;

    /** Optional. Message is an invoice for a payment, information about the invoice. More about payments » */
    public ?Invoice $invoice = null;

    /** Optional. Message is a service message about a successful payment, information about the payment. More about payments » */
    public ?SuccessfulPayment $successful_payment = null;

    /** Optional. Service message: a user was shared with the bot */
    public ?UserShared $user_shared = null;

    /** Optional. Service message: a chat was shared with the bot */
    public ?ChatShared $chat_shared = null;

    /** Optional. The domain name of the website on which the user has logged in. More about Telegram Login » */
    public ?string $connected_website = null;

    /** Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess */
    public ?WriteAccessAllowed $write_access_allowed = null;

    /** Optional. Telegram Passport data */
    public ?PassportData $passport_data = null;

    /** Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location. */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;

    /** Optional. Service message: forum topic created */
    public ?ForumTopicCreated $forum_topic_created = null;

    /** Optional. Service message: forum topic edited */
    public ?ForumTopicEdited $forum_topic_edited = null;

    /** Optional. Service message: forum topic closed */
    public ?ForumTopicClosed $forum_topic_closed = null;

    /** Optional. Service message: forum topic reopened */
    public ?ForumTopicReopened $forum_topic_reopened = null;

    /** Optional. Service message: the 'General' forum topic hidden */
    public ?GeneralForumTopicHidden $general_forum_topic_hidden = null;

    /** Optional. Service message: the 'General' forum topic unhidden */
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null;

    /** Optional. Service message: video chat scheduled */
    public ?VideoChatScheduled $video_chat_scheduled = null;

    /** Optional. Service message: video chat started */
    public ?VideoChatStarted $video_chat_started = null;

    /** Optional. Service message: video chat ended */
    public ?VideoChatEnded $video_chat_ended = null;

    /** Optional. Service message: new participants invited to a video chat */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;

    /** Optional. Service message: data sent by a Web App */
    public ?WebAppData $web_app_data = null;

    /** Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons. */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
     * @param int $message_id Unique message identifier inside this chat
     * @param int $date Date the message was sent in Unix time
     * @param Chat $chat Conversation the message belongs to
     * @param int $message_thread_id Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @param User $from Optional. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     * @param Chat $sender_chat Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     * @param User $forward_from Optional. For forwarded messages, sender of the original message
     * @param Chat $forward_from_chat Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
     * @param int $forward_from_message_id Optional. For messages forwarded from channels, identifier of the original message in the channel
     * @param string $forward_signature Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present
     * @param string $forward_sender_name Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     * @param int $forward_date Optional. For forwarded messages, date the original message was sent in Unix time
     * @param bool $is_topic_message Optional. True, if the message is sent to a forum topic
     * @param bool $is_automatic_forward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param Message $reply_to_message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param User $via_bot Optional. Bot through which the message was sent
     * @param int $edit_date Optional. Date the message was last edited in Unix time
     * @param bool $has_protected_content Optional. True, if the message can't be forwarded
     * @param string $media_group_id Optional. The unique identifier of a media message group this message belongs to
     * @param string $author_signature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param string $text Optional. For text messages, the actual UTF-8 text of the message
     * @param MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param Animation $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     * @param Audio $audio Optional. Message is an audio file, information about the file
     * @param Document $document Optional. Message is a general file, information about the file
     * @param PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
     * @param Sticker $sticker Optional. Message is a sticker, information about the sticker
     * @param Story $story Optional. Message is a forwarded story
     * @param Video $video Optional. Message is a video, information about the video
     * @param VideoNote $video_note Optional. Message is a video note, information about the video message
     * @param Voice $voice Optional. Message is a voice message, information about the file
     * @param string $caption Optional. Caption for the animation, audio, document, photo, video or voice
     * @param MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param bool $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
     * @param Contact $contact Optional. Message is a shared contact, information about the contact
     * @param Dice $dice Optional. Message is a dice with random value
     * @param Game $game Optional. Message is a game, information about the game. More about games »
     * @param Poll $poll Optional. Message is a native poll, information about the poll
     * @param Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
     * @param Location $location Optional. Message is a shared location, information about the location
     * @param User[] $new_chat_members Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @param string $new_chat_title Optional. A chat title was changed to this value
     * @param PhotoSize[] $new_chat_photo Optional. A chat photo was change to this value
     * @param bool $delete_chat_photo Optional. Service message: the chat photo was deleted
     * @param bool $group_chat_created Optional. Service message: the group has been created
     * @param bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param bool $channel_chat_created Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
     * @param int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param Message $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     * @param Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @param SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
     * @param UserShared $user_shared Optional. Service message: a user was shared with the bot
     * @param ChatShared $chat_shared Optional. Service message: a chat was shared with the bot
     * @param string $connected_website Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     * @param WriteAccessAllowed $write_access_allowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     * @param PassportData $passport_data Optional. Telegram Passport data
     * @param ProximityAlertTriggered $proximity_alert_triggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param ForumTopicCreated $forum_topic_created Optional. Service message: forum topic created
     * @param ForumTopicEdited $forum_topic_edited Optional. Service message: forum topic edited
     * @param ForumTopicClosed $forum_topic_closed Optional. Service message: forum topic closed
     * @param ForumTopicReopened $forum_topic_reopened Optional. Service message: forum topic reopened
     * @param GeneralForumTopicHidden $general_forum_topic_hidden Optional. Service message: the 'General' forum topic hidden
     * @param GeneralForumTopicUnhidden $general_forum_topic_unhidden Optional. Service message: the 'General' forum topic unhidden
     * @param VideoChatScheduled $video_chat_scheduled Optional. Service message: video chat scheduled
     * @param VideoChatStarted $video_chat_started Optional. Service message: video chat started
     * @param VideoChatEnded $video_chat_ended Optional. Service message: video chat ended
     * @param VideoChatParticipantsInvited $video_chat_participants_invited Optional. Service message: new participants invited to a video chat
     * @param WebAppData $web_app_data Optional. Service message: data sent by a Web App
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public static function make(
        int $message_id,
        int $date,
        Chat $chat,
        ?int $message_thread_id = null,
        ?User $from = null,
        ?Chat $sender_chat = null,
        ?User $forward_from = null,
        ?Chat $forward_from_chat = null,
        ?int $forward_from_message_id = null,
        ?string $forward_signature = null,
        ?string $forward_sender_name = null,
        ?int $forward_date = null,
        ?bool $is_topic_message = null,
        ?bool $is_automatic_forward = null,
        ?Message $reply_to_message = null,
        ?User $via_bot = null,
        ?int $edit_date = null,
        ?bool $has_protected_content = null,
        ?string $media_group_id = null,
        ?string $author_signature = null,
        ?string $text = null,
        ?array $entities = null,
        ?Animation $animation = null,
        ?Audio $audio = null,
        ?Document $document = null,
        ?array $photo = null,
        ?Sticker $sticker = null,
        ?Story $story = null,
        ?Video $video = null,
        ?VideoNote $video_note = null,
        ?Voice $voice = null,
        ?string $caption = null,
        ?array $caption_entities = null,
        ?bool $has_media_spoiler = null,
        ?Contact $contact = null,
        ?Dice $dice = null,
        ?Game $game = null,
        ?Poll $poll = null,
        ?Venue $venue = null,
        ?Location $location = null,
        ?array $new_chat_members = null,
        ?User $left_chat_member = null,
        ?string $new_chat_title = null,
        ?array $new_chat_photo = null,
        ?bool $delete_chat_photo = null,
        ?bool $group_chat_created = null,
        ?bool $supergroup_chat_created = null,
        ?bool $channel_chat_created = null,
        ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null,
        ?int $migrate_to_chat_id = null,
        ?int $migrate_from_chat_id = null,
        ?Message $pinned_message = null,
        ?Invoice $invoice = null,
        ?SuccessfulPayment $successful_payment = null,
        ?UserShared $user_shared = null,
        ?ChatShared $chat_shared = null,
        ?string $connected_website = null,
        ?WriteAccessAllowed $write_access_allowed = null,
        ?PassportData $passport_data = null,
        ?ProximityAlertTriggered $proximity_alert_triggered = null,
        ?ForumTopicCreated $forum_topic_created = null,
        ?ForumTopicEdited $forum_topic_edited = null,
        ?ForumTopicClosed $forum_topic_closed = null,
        ?ForumTopicReopened $forum_topic_reopened = null,
        ?GeneralForumTopicHidden $general_forum_topic_hidden = null,
        ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null,
        ?VideoChatScheduled $video_chat_scheduled = null,
        ?VideoChatStarted $video_chat_started = null,
        ?VideoChatEnded $video_chat_ended = null,
        ?VideoChatParticipantsInvited $video_chat_participants_invited = null,
        ?WebAppData $web_app_data = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): static {
        return new static([
            'message_id' => $message_id,
            'date' => $date,
            'chat' => $chat,
            'message_thread_id' => $message_thread_id,
            'from' => $from,
            'sender_chat' => $sender_chat,
            'forward_from' => $forward_from,
            'forward_from_chat' => $forward_from_chat,
            'forward_from_message_id' => $forward_from_message_id,
            'forward_signature' => $forward_signature,
            'forward_sender_name' => $forward_sender_name,
            'forward_date' => $forward_date,
            'is_topic_message' => $is_topic_message,
            'is_automatic_forward' => $is_automatic_forward,
            'reply_to_message' => $reply_to_message,
            'via_bot' => $via_bot,
            'edit_date' => $edit_date,
            'has_protected_content' => $has_protected_content,
            'media_group_id' => $media_group_id,
            'author_signature' => $author_signature,
            'text' => $text,
            'entities' => $entities,
            'animation' => $animation,
            'audio' => $audio,
            'document' => $document,
            'photo' => $photo,
            'sticker' => $sticker,
            'story' => $story,
            'video' => $video,
            'video_note' => $video_note,
            'voice' => $voice,
            'caption' => $caption,
            'caption_entities' => $caption_entities,
            'has_media_spoiler' => $has_media_spoiler,
            'contact' => $contact,
            'dice' => $dice,
            'game' => $game,
            'poll' => $poll,
            'venue' => $venue,
            'location' => $location,
            'new_chat_members' => $new_chat_members,
            'left_chat_member' => $left_chat_member,
            'new_chat_title' => $new_chat_title,
            'new_chat_photo' => $new_chat_photo,
            'delete_chat_photo' => $delete_chat_photo,
            'group_chat_created' => $group_chat_created,
            'supergroup_chat_created' => $supergroup_chat_created,
            'channel_chat_created' => $channel_chat_created,
            'message_auto_delete_timer_changed' => $message_auto_delete_timer_changed,
            'migrate_to_chat_id' => $migrate_to_chat_id,
            'migrate_from_chat_id' => $migrate_from_chat_id,
            'pinned_message' => $pinned_message,
            'invoice' => $invoice,
            'successful_payment' => $successful_payment,
            'user_shared' => $user_shared,
            'chat_shared' => $chat_shared,
            'connected_website' => $connected_website,
            'write_access_allowed' => $write_access_allowed,
            'passport_data' => $passport_data,
            'proximity_alert_triggered' => $proximity_alert_triggered,
            'forum_topic_created' => $forum_topic_created,
            'forum_topic_edited' => $forum_topic_edited,
            'forum_topic_closed' => $forum_topic_closed,
            'forum_topic_reopened' => $forum_topic_reopened,
            'general_forum_topic_hidden' => $general_forum_topic_hidden,
            'general_forum_topic_unhidden' => $general_forum_topic_unhidden,
            'video_chat_scheduled' => $video_chat_scheduled,
            'video_chat_started' => $video_chat_started,
            'video_chat_ended' => $video_chat_ended,
            'video_chat_participants_invited' => $video_chat_participants_invited,
            'web_app_data' => $web_app_data,
            'reply_markup' => $reply_markup,
        ]);
    }
}

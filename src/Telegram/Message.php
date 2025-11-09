<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Extensions\MessageExtension;

/**
 * This object represents a message.
 */
class Message extends MaybeInaccessibleMessage
{
    use MessageExtension;

    /** <em>Optional</em>. Unique identifier of a message thread to which the message belongs; for supergroups only */
    public ?int $message_thread_id = null;

    /** <em>Optional</em>. Information about the direct messages chat topic that contains the message */
    public ?DirectMessagesTopic $direct_messages_topic = null;

    /** <em>Optional</em>. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats */
    public ?User $from = null;

    /** <em>Optional</em>. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field <em>from</em> contains a fake sender user in non-channel chats. */
    public ?Chat $sender_chat = null;

    /** <em>Optional</em>. If the sender of the message boosted the chat, the number of boosts added by the user */
    public ?int $sender_boost_count = null;

    /** <em>Optional</em>. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account. */
    public ?User $sender_business_bot = null;

    /** <em>Optional</em>. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier. */
    public ?string $business_connection_id = null;

    /** <em>Optional</em>. Information about the original message for forwarded messages */
    public ?MessageOrigin $forward_origin = null;

    /** <em>Optional</em>. <em>True</em>, if the message is sent to a forum topic */
    public ?bool $is_topic_message = null;

    /** <em>Optional</em>. <em>True</em>, if the message is a channel post that was automatically forwarded to the connected discussion group */
    public ?bool $is_automatic_forward = null;

    /** <em>Optional</em>. For replies in the same chat and message thread, the original message. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain further <em>reply_to_message</em> fields even if it itself is a reply. */
    public ?Message $reply_to_message = null;

    /** <em>Optional</em>. Information about the message that is being replied to, which may come from another chat or forum topic */
    public ?ExternalReplyInfo $external_reply = null;

    /** <em>Optional</em>. For replies that quote part of the original message, the quoted part of the message */
    public ?TextQuote $quote = null;

    /** <em>Optional</em>. For replies to a story, the original story */
    public ?Story $reply_to_story = null;

    /** <em>Optional</em>. Identifier of the specific checklist task that is being replied to */
    public ?int $reply_to_checklist_task_id = null;

    /** <em>Optional</em>. Bot through which the message was sent */
    public ?User $via_bot = null;

    /** <em>Optional</em>. Date the message was last edited in Unix time */
    public ?int $edit_date = null;

    /** <em>Optional</em>. <em>True</em>, if the message can't be forwarded */
    public ?bool $has_protected_content = null;

    /** <em>Optional</em>. <em>True</em>, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message */
    public ?bool $is_from_offline = null;

    /** <em>Optional</em>. <em>True</em>, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited. */
    public ?bool $is_paid_post = null;

    /** <em>Optional</em>. The unique identifier of a media message group this message belongs to */
    public ?string $media_group_id = null;

    /** <em>Optional</em>. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator */
    public ?string $author_signature = null;

    /** <em>Optional</em>. The number of Telegram Stars that were paid by the sender of the message to send it */
    public ?int $paid_star_count = null;

    /** <em>Optional</em>. For text messages, the actual UTF-8 text of the message */
    public ?string $text = null;

    /**
     * <em>Optional</em>. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** <em>Optional</em>. Options used for link preview generation for the message, if it is a text message and link preview options were changed */
    public ?LinkPreviewOptions $link_preview_options = null;

    /** <em>Optional</em>. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited. */
    public ?SuggestedPostInfo $suggested_post_info = null;

    /** <em>Optional</em>. Unique identifier of the message effect added to the message */
    public ?string $effect_id = null;

    /** <em>Optional</em>. Message is an animation, information about the animation. For backward compatibility, when this field is set, the <em>document</em> field will also be set */
    public ?Animation $animation = null;

    /** <em>Optional</em>. Message is an audio file, information about the file */
    public ?Audio $audio = null;

    /** <em>Optional</em>. Message is a general file, information about the file */
    public ?Document $document = null;

    /** <em>Optional</em>. Message contains paid media; information about the paid media */
    public ?PaidMediaInfo $paid_media = null;

    /**
     * <em>Optional</em>. Message is a photo, available sizes of the photo
     *
     * @var PhotoSize[]
     */
    public ?array $photo = null;

    /** <em>Optional</em>. Message is a sticker, information about the sticker */
    public ?Sticker $sticker = null;

    /** <em>Optional</em>. Message is a forwarded story */
    public ?Story $story = null;

    /** <em>Optional</em>. Message is a video, information about the video */
    public ?Video $video = null;

    /** <em>Optional</em>. Message is a <a href="https://telegram.org/blog/video-messages-and-telescope">video note</a>, information about the video message */
    public ?VideoNote $video_note = null;

    /** <em>Optional</em>. Message is a voice message, information about the file */
    public ?Voice $voice = null;

    /** <em>Optional</em>. Caption for the animation, audio, document, paid media, photo, video or voice */
    public ?string $caption = null;

    /**
     * <em>Optional</em>. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. <em>True</em>, if the caption must be shown above the message media */
    public ?bool $show_caption_above_media = null;

    /** <em>Optional</em>. <em>True</em>, if the message media is covered by a spoiler animation */
    public ?bool $has_media_spoiler = null;

    /** <em>Optional</em>. Message is a checklist */
    public ?Checklist $checklist = null;

    /** <em>Optional</em>. Message is a shared contact, information about the contact */
    public ?Contact $contact = null;

    /** <em>Optional</em>. Message is a dice with random value */
    public ?Dice $dice = null;

    /** <em>Optional</em>. Message is a game, information about the game. <a href="https://core.telegram.org/bots/api#games">More about games &#xBB;</a> */
    public ?Game $game = null;

    /** <em>Optional</em>. Message is a native poll, information about the poll */
    public ?Poll $poll = null;

    /** <em>Optional</em>. Message is a venue, information about the venue. For backward compatibility, when this field is set, the <em>location</em> field will also be set */
    public ?Venue $venue = null;

    /** <em>Optional</em>. Message is a shared location, information about the location */
    public ?Location $location = null;

    /**
     * <em>Optional</em>. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @var User[]
     */
    public ?array $new_chat_members = null;

    /** <em>Optional</em>. A member was removed from the group, information about them (this member may be the bot itself) */
    public ?User $left_chat_member = null;

    /** <em>Optional</em>. A chat title was changed to this value */
    public ?string $new_chat_title = null;

    /**
     * <em>Optional</em>. A chat photo was change to this value
     *
     * @var PhotoSize[]
     */
    public ?array $new_chat_photo = null;

    /** <em>Optional</em>. Service message: the chat photo was deleted */
    public ?bool $delete_chat_photo = null;

    /** <em>Optional</em>. Service message: the group has been created */
    public ?bool $group_chat_created = null;

    /** <em>Optional</em>. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
    public ?bool $supergroup_chat_created = null;

    /** <em>Optional</em>. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
    public ?bool $channel_chat_created = null;

    /** <em>Optional</em>. Service message: auto-delete timer settings changed in the chat */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;

    /** <em>Optional</em>. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_to_chat_id = null;

    /** <em>Optional</em>. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_from_chat_id = null;

    /** <em>Optional</em>. Specified message was pinned. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain further <em>reply_to_message</em> fields even if it itself is a reply. */
    public ?MaybeInaccessibleMessage $pinned_message = null;

    /** <em>Optional</em>. Message is an invoice for a <a href="https://core.telegram.org/bots/api#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a> */
    public ?Invoice $invoice = null;

    /** <em>Optional</em>. Message is a service message about a successful payment, information about the payment. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a> */
    public ?SuccessfulPayment $successful_payment = null;

    /** <em>Optional</em>. Message is a service message about a refunded payment, information about the payment. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a> */
    public ?RefundedPayment $refunded_payment = null;

    /** <em>Optional</em>. Service message: users were shared with the bot */
    public ?UsersShared $users_shared = null;

    /** <em>Optional</em>. Service message: a chat was shared with the bot */
    public ?ChatShared $chat_shared = null;

    /** <em>Optional</em>. Service message: a regular gift was sent or received */
    public ?GiftInfo $gift = null;

    /** <em>Optional</em>. Service message: a unique gift was sent or received */
    public ?UniqueGiftInfo $unique_gift = null;

    /** <em>Optional</em>. The domain name of the website on which the user has logged in. <a href="https://core.telegram.org/widgets/login">More about Telegram Login &#xBB;</a> */
    public ?string $connected_website = null;

    /** <em>Optional</em>. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a> */
    public ?WriteAccessAllowed $write_access_allowed = null;

    /** <em>Optional</em>. Telegram Passport data */
    public ?PassportData $passport_data = null;

    /** <em>Optional</em>. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location. */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;

    /** <em>Optional</em>. Service message: user boosted the chat */
    public ?ChatBoostAdded $boost_added = null;

    /** <em>Optional</em>. Service message: chat background set */
    public ?ChatBackground $chat_background_set = null;

    /** <em>Optional</em>. Service message: some tasks in a checklist were marked as done or not done */
    public ?ChecklistTasksDone $checklist_tasks_done = null;

    /** <em>Optional</em>. Service message: tasks were added to a checklist */
    public ?ChecklistTasksAdded $checklist_tasks_added = null;

    /** <em>Optional</em>. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed */
    public ?DirectMessagePriceChanged $direct_message_price_changed = null;

    /** <em>Optional</em>. Service message: forum topic created */
    public ?ForumTopicCreated $forum_topic_created = null;

    /** <em>Optional</em>. Service message: forum topic edited */
    public ?ForumTopicEdited $forum_topic_edited = null;

    /** <em>Optional</em>. Service message: forum topic closed */
    public ?ForumTopicClosed $forum_topic_closed = null;

    /** <em>Optional</em>. Service message: forum topic reopened */
    public ?ForumTopicReopened $forum_topic_reopened = null;

    /** <em>Optional</em>. Service message: the 'General' forum topic hidden */
    public ?GeneralForumTopicHidden $general_forum_topic_hidden = null;

    /** <em>Optional</em>. Service message: the 'General' forum topic unhidden */
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null;

    /** <em>Optional</em>. Service message: a scheduled giveaway was created */
    public ?GiveawayCreated $giveaway_created = null;

    /** <em>Optional</em>. The message is a scheduled giveaway message */
    public ?Giveaway $giveaway = null;

    /** <em>Optional</em>. A giveaway with public winners was completed */
    public ?GiveawayWinners $giveaway_winners = null;

    /** <em>Optional</em>. Service message: a giveaway without public winners was completed */
    public ?GiveawayCompleted $giveaway_completed = null;

    /** <em>Optional</em>. Service message: the price for paid messages has changed in the chat */
    public ?PaidMessagePriceChanged $paid_message_price_changed = null;

    /** <em>Optional</em>. Service message: a suggested post was approved */
    public ?SuggestedPostApproved $suggested_post_approved = null;

    /** <em>Optional</em>. Service message: approval of a suggested post has failed */
    public ?SuggestedPostApprovalFailed $suggested_post_approval_failed = null;

    /** <em>Optional</em>. Service message: a suggested post was declined */
    public ?SuggestedPostDeclined $suggested_post_declined = null;

    /** <em>Optional</em>. Service message: payment for a suggested post was received */
    public ?SuggestedPostPaid $suggested_post_paid = null;

    /** <em>Optional</em>. Service message: payment for a suggested post was refunded */
    public ?SuggestedPostRefunded $suggested_post_refunded = null;

    /** <em>Optional</em>. Service message: video chat scheduled */
    public ?VideoChatScheduled $video_chat_scheduled = null;

    /** <em>Optional</em>. Service message: video chat started */
    public ?VideoChatStarted $video_chat_started = null;

    /** <em>Optional</em>. Service message: video chat ended */
    public ?VideoChatEnded $video_chat_ended = null;

    /** <em>Optional</em>. Service message: new participants invited to a video chat */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;

    /** <em>Optional</em>. Service message: data sent by a Web App */
    public ?WebAppData $web_app_data = null;

    /** <em>Optional</em>. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons. */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
     * @param  int  $message_id  Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     * @param  int  $date  Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     * @param  Chat  $chat  Chat the message belongs to
     * @param  int  $message_thread_id  <em>Optional</em>. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @param  DirectMessagesTopic  $direct_messages_topic  <em>Optional</em>. Information about the direct messages chat topic that contains the message
     * @param  User  $from  <em>Optional</em>. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
     * @param  Chat  $sender_chat  <em>Optional</em>. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field <em>from</em> contains a fake sender user in non-channel chats.
     * @param  int  $sender_boost_count  <em>Optional</em>. If the sender of the message boosted the chat, the number of boosts added by the user
     * @param  User  $sender_business_bot  <em>Optional</em>. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     * @param  string  $business_connection_id  <em>Optional</em>. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     * @param  MessageOrigin  $forward_origin  <em>Optional</em>. Information about the original message for forwarded messages
     * @param  bool  $is_topic_message  <em>Optional</em>. <em>True</em>, if the message is sent to a forum topic
     * @param  bool  $is_automatic_forward  <em>Optional</em>. <em>True</em>, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param  Message  $reply_to_message  <em>Optional</em>. For replies in the same chat and message thread, the original message. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain further <em>reply_to_message</em> fields even if it itself is a reply.
     * @param  ExternalReplyInfo  $external_reply  <em>Optional</em>. Information about the message that is being replied to, which may come from another chat or forum topic
     * @param  TextQuote  $quote  <em>Optional</em>. For replies that quote part of the original message, the quoted part of the message
     * @param  Story  $reply_to_story  <em>Optional</em>. For replies to a story, the original story
     * @param  int  $reply_to_checklist_task_id  <em>Optional</em>. Identifier of the specific checklist task that is being replied to
     * @param  User  $via_bot  <em>Optional</em>. Bot through which the message was sent
     * @param  int  $edit_date  <em>Optional</em>. Date the message was last edited in Unix time
     * @param  bool  $has_protected_content  <em>Optional</em>. <em>True</em>, if the message can't be forwarded
     * @param  bool  $is_from_offline  <em>Optional</em>. <em>True</em>, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     * @param  bool  $is_paid_post  <em>Optional</em>. <em>True</em>, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
     * @param  string  $media_group_id  <em>Optional</em>. The unique identifier of a media message group this message belongs to
     * @param  string  $author_signature  <em>Optional</em>. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param  int  $paid_star_count  <em>Optional</em>. The number of Telegram Stars that were paid by the sender of the message to send it
     * @param  string  $text  <em>Optional</em>. For text messages, the actual UTF-8 text of the message
     * @param  MessageEntity[]  $entities  <em>Optional</em>. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param  LinkPreviewOptions  $link_preview_options  <em>Optional</em>. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     * @param  SuggestedPostInfo  $suggested_post_info  <em>Optional</em>. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
     * @param  string  $effect_id  <em>Optional</em>. Unique identifier of the message effect added to the message
     * @param  Animation  $animation  <em>Optional</em>. Message is an animation, information about the animation. For backward compatibility, when this field is set, the <em>document</em> field will also be set
     * @param  Audio  $audio  <em>Optional</em>. Message is an audio file, information about the file
     * @param  Document  $document  <em>Optional</em>. Message is a general file, information about the file
     * @param  PaidMediaInfo  $paid_media  <em>Optional</em>. Message contains paid media; information about the paid media
     * @param  PhotoSize[]  $photo  <em>Optional</em>. Message is a photo, available sizes of the photo
     * @param  Sticker  $sticker  <em>Optional</em>. Message is a sticker, information about the sticker
     * @param  Story  $story  <em>Optional</em>. Message is a forwarded story
     * @param  Video  $video  <em>Optional</em>. Message is a video, information about the video
     * @param  VideoNote  $video_note  <em>Optional</em>. Message is a <a href="https://telegram.org/blog/video-messages-and-telescope">video note</a>, information about the video message
     * @param  Voice  $voice  <em>Optional</em>. Message is a voice message, information about the file
     * @param  string  $caption  <em>Optional</em>. Caption for the animation, audio, document, paid media, photo, video or voice
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param  bool  $show_caption_above_media  <em>Optional</em>. <em>True</em>, if the caption must be shown above the message media
     * @param  bool  $has_media_spoiler  <em>Optional</em>. <em>True</em>, if the message media is covered by a spoiler animation
     * @param  Checklist  $checklist  <em>Optional</em>. Message is a checklist
     * @param  Contact  $contact  <em>Optional</em>. Message is a shared contact, information about the contact
     * @param  Dice  $dice  <em>Optional</em>. Message is a dice with random value
     * @param  Game  $game  <em>Optional</em>. Message is a game, information about the game. <a href="https://core.telegram.org/bots/api#games">More about games &#xBB;</a>
     * @param  Poll  $poll  <em>Optional</em>. Message is a native poll, information about the poll
     * @param  Venue  $venue  <em>Optional</em>. Message is a venue, information about the venue. For backward compatibility, when this field is set, the <em>location</em> field will also be set
     * @param  Location  $location  <em>Optional</em>. Message is a shared location, information about the location
     * @param  User[]  $new_chat_members  <em>Optional</em>. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param  User  $left_chat_member  <em>Optional</em>. A member was removed from the group, information about them (this member may be the bot itself)
     * @param  string  $new_chat_title  <em>Optional</em>. A chat title was changed to this value
     * @param  PhotoSize[]  $new_chat_photo  <em>Optional</em>. A chat photo was change to this value
     * @param  bool  $delete_chat_photo  <em>Optional</em>. Service message: the chat photo was deleted
     * @param  bool  $group_chat_created  <em>Optional</em>. Service message: the group has been created
     * @param  bool  $supergroup_chat_created  <em>Optional</em>. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param  bool  $channel_chat_created  <em>Optional</em>. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param  MessageAutoDeleteTimerChanged  $message_auto_delete_timer_changed  <em>Optional</em>. Service message: auto-delete timer settings changed in the chat
     * @param  int  $migrate_to_chat_id  <em>Optional</em>. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  int  $migrate_from_chat_id  <em>Optional</em>. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  MaybeInaccessibleMessage  $pinned_message  <em>Optional</em>. Specified message was pinned. Note that the <a href="https://core.telegram.org/bots/api#message">Message</a> object in this field will not contain further <em>reply_to_message</em> fields even if it itself is a reply.
     * @param  Invoice  $invoice  <em>Optional</em>. Message is an invoice for a <a href="https://core.telegram.org/bots/api#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a>
     * @param  SuccessfulPayment  $successful_payment  <em>Optional</em>. Message is a service message about a successful payment, information about the payment. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a>
     * @param  RefundedPayment  $refunded_payment  <em>Optional</em>. Message is a service message about a refunded payment, information about the payment. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a>
     * @param  UsersShared  $users_shared  <em>Optional</em>. Service message: users were shared with the bot
     * @param  ChatShared  $chat_shared  <em>Optional</em>. Service message: a chat was shared with the bot
     * @param  GiftInfo  $gift  <em>Optional</em>. Service message: a regular gift was sent or received
     * @param  UniqueGiftInfo  $unique_gift  <em>Optional</em>. Service message: a unique gift was sent or received
     * @param  string  $connected_website  <em>Optional</em>. The domain name of the website on which the user has logged in. <a href="https://core.telegram.org/widgets/login">More about Telegram Login &#xBB;</a>
     * @param  WriteAccessAllowed  $write_access_allowed  <em>Optional</em>. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a>
     * @param  PassportData  $passport_data  <em>Optional</em>. Telegram Passport data
     * @param  ProximityAlertTriggered  $proximity_alert_triggered  <em>Optional</em>. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param  ChatBoostAdded  $boost_added  <em>Optional</em>. Service message: user boosted the chat
     * @param  ChatBackground  $chat_background_set  <em>Optional</em>. Service message: chat background set
     * @param  ChecklistTasksDone  $checklist_tasks_done  <em>Optional</em>. Service message: some tasks in a checklist were marked as done or not done
     * @param  ChecklistTasksAdded  $checklist_tasks_added  <em>Optional</em>. Service message: tasks were added to a checklist
     * @param  DirectMessagePriceChanged  $direct_message_price_changed  <em>Optional</em>. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
     * @param  ForumTopicCreated  $forum_topic_created  <em>Optional</em>. Service message: forum topic created
     * @param  ForumTopicEdited  $forum_topic_edited  <em>Optional</em>. Service message: forum topic edited
     * @param  ForumTopicClosed  $forum_topic_closed  <em>Optional</em>. Service message: forum topic closed
     * @param  ForumTopicReopened  $forum_topic_reopened  <em>Optional</em>. Service message: forum topic reopened
     * @param  GeneralForumTopicHidden  $general_forum_topic_hidden  <em>Optional</em>. Service message: the 'General' forum topic hidden
     * @param  GeneralForumTopicUnhidden  $general_forum_topic_unhidden  <em>Optional</em>. Service message: the 'General' forum topic unhidden
     * @param  GiveawayCreated  $giveaway_created  <em>Optional</em>. Service message: a scheduled giveaway was created
     * @param  Giveaway  $giveaway  <em>Optional</em>. The message is a scheduled giveaway message
     * @param  GiveawayWinners  $giveaway_winners  <em>Optional</em>. A giveaway with public winners was completed
     * @param  GiveawayCompleted  $giveaway_completed  <em>Optional</em>. Service message: a giveaway without public winners was completed
     * @param  PaidMessagePriceChanged  $paid_message_price_changed  <em>Optional</em>. Service message: the price for paid messages has changed in the chat
     * @param  SuggestedPostApproved  $suggested_post_approved  <em>Optional</em>. Service message: a suggested post was approved
     * @param  SuggestedPostApprovalFailed  $suggested_post_approval_failed  <em>Optional</em>. Service message: approval of a suggested post has failed
     * @param  SuggestedPostDeclined  $suggested_post_declined  <em>Optional</em>. Service message: a suggested post was declined
     * @param  SuggestedPostPaid  $suggested_post_paid  <em>Optional</em>. Service message: payment for a suggested post was received
     * @param  SuggestedPostRefunded  $suggested_post_refunded  <em>Optional</em>. Service message: payment for a suggested post was refunded
     * @param  VideoChatScheduled  $video_chat_scheduled  <em>Optional</em>. Service message: video chat scheduled
     * @param  VideoChatStarted  $video_chat_started  <em>Optional</em>. Service message: video chat started
     * @param  VideoChatEnded  $video_chat_ended  <em>Optional</em>. Service message: video chat ended
     * @param  VideoChatParticipantsInvited  $video_chat_participants_invited  <em>Optional</em>. Service message: new participants invited to a video chat
     * @param  WebAppData  $web_app_data  <em>Optional</em>. Service message: data sent by a Web App
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public static function make(
        int $message_id,
        int $date,
        Chat $chat,
        ?int $message_thread_id = null,
        ?DirectMessagesTopic $direct_messages_topic = null,
        ?User $from = null,
        ?Chat $sender_chat = null,
        ?int $sender_boost_count = null,
        ?User $sender_business_bot = null,
        ?string $business_connection_id = null,
        ?MessageOrigin $forward_origin = null,
        ?bool $is_topic_message = null,
        ?bool $is_automatic_forward = null,
        ?Message $reply_to_message = null,
        ?ExternalReplyInfo $external_reply = null,
        ?TextQuote $quote = null,
        ?Story $reply_to_story = null,
        ?int $reply_to_checklist_task_id = null,
        ?User $via_bot = null,
        ?int $edit_date = null,
        ?bool $has_protected_content = null,
        ?bool $is_from_offline = null,
        ?bool $is_paid_post = null,
        ?string $media_group_id = null,
        ?string $author_signature = null,
        ?int $paid_star_count = null,
        ?string $text = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
        ?SuggestedPostInfo $suggested_post_info = null,
        ?string $effect_id = null,
        ?Animation $animation = null,
        ?Audio $audio = null,
        ?Document $document = null,
        ?PaidMediaInfo $paid_media = null,
        ?array $photo = null,
        ?Sticker $sticker = null,
        ?Story $story = null,
        ?Video $video = null,
        ?VideoNote $video_note = null,
        ?Voice $voice = null,
        ?string $caption = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_media_spoiler = null,
        ?Checklist $checklist = null,
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
        ?MaybeInaccessibleMessage $pinned_message = null,
        ?Invoice $invoice = null,
        ?SuccessfulPayment $successful_payment = null,
        ?RefundedPayment $refunded_payment = null,
        ?UsersShared $users_shared = null,
        ?ChatShared $chat_shared = null,
        ?GiftInfo $gift = null,
        ?UniqueGiftInfo $unique_gift = null,
        ?string $connected_website = null,
        ?WriteAccessAllowed $write_access_allowed = null,
        ?PassportData $passport_data = null,
        ?ProximityAlertTriggered $proximity_alert_triggered = null,
        ?ChatBoostAdded $boost_added = null,
        ?ChatBackground $chat_background_set = null,
        ?ChecklistTasksDone $checklist_tasks_done = null,
        ?ChecklistTasksAdded $checklist_tasks_added = null,
        ?DirectMessagePriceChanged $direct_message_price_changed = null,
        ?ForumTopicCreated $forum_topic_created = null,
        ?ForumTopicEdited $forum_topic_edited = null,
        ?ForumTopicClosed $forum_topic_closed = null,
        ?ForumTopicReopened $forum_topic_reopened = null,
        ?GeneralForumTopicHidden $general_forum_topic_hidden = null,
        ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null,
        ?GiveawayCreated $giveaway_created = null,
        ?Giveaway $giveaway = null,
        ?GiveawayWinners $giveaway_winners = null,
        ?GiveawayCompleted $giveaway_completed = null,
        ?PaidMessagePriceChanged $paid_message_price_changed = null,
        ?SuggestedPostApproved $suggested_post_approved = null,
        ?SuggestedPostApprovalFailed $suggested_post_approval_failed = null,
        ?SuggestedPostDeclined $suggested_post_declined = null,
        ?SuggestedPostPaid $suggested_post_paid = null,
        ?SuggestedPostRefunded $suggested_post_refunded = null,
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
            'direct_messages_topic' => $direct_messages_topic,
            'from' => $from,
            'sender_chat' => $sender_chat,
            'sender_boost_count' => $sender_boost_count,
            'sender_business_bot' => $sender_business_bot,
            'business_connection_id' => $business_connection_id,
            'forward_origin' => $forward_origin,
            'is_topic_message' => $is_topic_message,
            'is_automatic_forward' => $is_automatic_forward,
            'reply_to_message' => $reply_to_message,
            'external_reply' => $external_reply,
            'quote' => $quote,
            'reply_to_story' => $reply_to_story,
            'reply_to_checklist_task_id' => $reply_to_checklist_task_id,
            'via_bot' => $via_bot,
            'edit_date' => $edit_date,
            'has_protected_content' => $has_protected_content,
            'is_from_offline' => $is_from_offline,
            'is_paid_post' => $is_paid_post,
            'media_group_id' => $media_group_id,
            'author_signature' => $author_signature,
            'paid_star_count' => $paid_star_count,
            'text' => $text,
            'entities' => $entities,
            'link_preview_options' => $link_preview_options,
            'suggested_post_info' => $suggested_post_info,
            'effect_id' => $effect_id,
            'animation' => $animation,
            'audio' => $audio,
            'document' => $document,
            'paid_media' => $paid_media,
            'photo' => $photo,
            'sticker' => $sticker,
            'story' => $story,
            'video' => $video,
            'video_note' => $video_note,
            'voice' => $voice,
            'caption' => $caption,
            'caption_entities' => $caption_entities,
            'show_caption_above_media' => $show_caption_above_media,
            'has_media_spoiler' => $has_media_spoiler,
            'checklist' => $checklist,
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
            'refunded_payment' => $refunded_payment,
            'users_shared' => $users_shared,
            'chat_shared' => $chat_shared,
            'gift' => $gift,
            'unique_gift' => $unique_gift,
            'connected_website' => $connected_website,
            'write_access_allowed' => $write_access_allowed,
            'passport_data' => $passport_data,
            'proximity_alert_triggered' => $proximity_alert_triggered,
            'boost_added' => $boost_added,
            'chat_background_set' => $chat_background_set,
            'checklist_tasks_done' => $checklist_tasks_done,
            'checklist_tasks_added' => $checklist_tasks_added,
            'direct_message_price_changed' => $direct_message_price_changed,
            'forum_topic_created' => $forum_topic_created,
            'forum_topic_edited' => $forum_topic_edited,
            'forum_topic_closed' => $forum_topic_closed,
            'forum_topic_reopened' => $forum_topic_reopened,
            'general_forum_topic_hidden' => $general_forum_topic_hidden,
            'general_forum_topic_unhidden' => $general_forum_topic_unhidden,
            'giveaway_created' => $giveaway_created,
            'giveaway' => $giveaway,
            'giveaway_winners' => $giveaway_winners,
            'giveaway_completed' => $giveaway_completed,
            'paid_message_price_changed' => $paid_message_price_changed,
            'suggested_post_approved' => $suggested_post_approved,
            'suggested_post_approval_failed' => $suggested_post_approval_failed,
            'suggested_post_declined' => $suggested_post_declined,
            'suggested_post_paid' => $suggested_post_paid,
            'suggested_post_refunded' => $suggested_post_refunded,
            'video_chat_scheduled' => $video_chat_scheduled,
            'video_chat_started' => $video_chat_started,
            'video_chat_ended' => $video_chat_ended,
            'video_chat_participants_invited' => $video_chat_participants_invited,
            'web_app_data' => $web_app_data,
            'reply_markup' => $reply_markup,
        ]);
    }
}

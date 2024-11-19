<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Layers;

use Telepath\Exceptions\TelegramException;
use Telepath\Files\InputFile;
use Telepath\Support\ParseMode\ParseMode;
use Telepath\Telegram\BotCommand;
use Telepath\Telegram\BotCommandScope;
use Telepath\Telegram\BotDescription;
use Telepath\Telegram\BotName;
use Telepath\Telegram\BotShortDescription;
use Telepath\Telegram\BusinessConnection;
use Telepath\Telegram\ChatAdministratorRights;
use Telepath\Telegram\ChatFullInfo;
use Telepath\Telegram\ChatInviteLink;
use Telepath\Telegram\ChatMember;
use Telepath\Telegram\ChatPermissions;
use Telepath\Telegram\File;
use Telepath\Telegram\ForceReply;
use Telepath\Telegram\ForumTopic;
use Telepath\Telegram\GameHighScore;
use Telepath\Telegram\InlineKeyboardMarkup;
use Telepath\Telegram\InlineQueryResult;
use Telepath\Telegram\InlineQueryResultsButton;
use Telepath\Telegram\InputMedia;
use Telepath\Telegram\InputMediaAudio;
use Telepath\Telegram\InputMediaDocument;
use Telepath\Telegram\InputMediaPhoto;
use Telepath\Telegram\InputMediaVideo;
use Telepath\Telegram\InputPaidMedia;
use Telepath\Telegram\InputPollOption;
use Telepath\Telegram\InputSticker;
use Telepath\Telegram\LabeledPrice;
use Telepath\Telegram\LinkPreviewOptions;
use Telepath\Telegram\MaskPosition;
use Telepath\Telegram\MenuButton;
use Telepath\Telegram\Message;
use Telepath\Telegram\MessageEntity;
use Telepath\Telegram\MessageId;
use Telepath\Telegram\PassportElementError;
use Telepath\Telegram\Poll;
use Telepath\Telegram\PreparedInlineMessage;
use Telepath\Telegram\ReactionType;
use Telepath\Telegram\ReplyKeyboardMarkup;
use Telepath\Telegram\ReplyKeyboardRemove;
use Telepath\Telegram\ReplyParameters;
use Telepath\Telegram\SentWebAppMessage;
use Telepath\Telegram\ShippingOption;
use Telepath\Telegram\StarTransactions;
use Telepath\Telegram\Sticker;
use Telepath\Telegram\StickerSet;
use Telepath\Telegram\Update;
use Telepath\Telegram\User;
use Telepath\Telegram\UserChatBoosts;
use Telepath\Telegram\UserProfilePhotos;
use Telepath\Telegram\WebhookInfo;
use Telepath\Types\Enums\ChatActionType;
use Telepath\Types\Enums\StickerType;

abstract class Generated extends Base
{
    /**
     * Use this method to receive incoming updates using long polling (<a href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>). Returns an Array of <a href="https://core.telegram.org/bots/api#update">Update</a> objects.
     *
     * @param  int  $offset  Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as <a href="https://core.telegram.org/bots/api#getupdates">getUpdates</a> is called with an <em>offset</em> higher than its <em>update_id</em>. The negative offset can be specified to retrieve updates starting from <em>-offset</em> update from the end of the updates queue. All previous updates will be forgotten.
     * @param  int  $limit  Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @param  int  $timeout  Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     * @param  string[]  $allowed_updates  A JSON-serialized list of the update types you want your bot to receive. For example, specify ["message", "edited_channel_post", "callback_query"] to only receive updates of these types. See <a href="https://core.telegram.org/bots/api#update">Update</a> for a complete list of available update types. Specify an empty list to receive all update types except <em>chat_member</em>, <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     * @return Update[]
     *
     * @throws TelegramException
     */
    public function getUpdates(
        ?int $offset = null,
        ?int $limit = null,
        ?int $timeout = null,
        ?array $allowed_updates = null,
    ): array {
        return $this->raw('getUpdates', func_get_args());
    }

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized <a href="https://core.telegram.org/bots/api#update">Update</a>. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns <em>True</em> on success.
     *
     * @param  string  $url  HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @param  InputFile  $certificate  Upload your public key certificate so that the root certificate in use can be checked. See our <a href="https://core.telegram.org/bots/self-signed">self-signed guide</a> for details.
     * @param  string  $ip_address  The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @param  int  $max_connections  The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to <em>40</em>. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @param  string[]  $allowed_updates  A JSON-serialized list of the update types you want your bot to receive. For example, specify ["message", "edited_channel_post", "callback_query"] to only receive updates of these types. See <a href="https://core.telegram.org/bots/api#update">Update</a> for a complete list of available update types. Specify an empty list to receive all update types except <em>chat_member</em>, <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     * @param  bool  $drop_pending_updates  Pass <em>True</em> to drop all pending updates
     * @param  string  $secret_token  A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     *
     * @throws TelegramException
     */
    public function setWebhook(
        string $url,
        ?InputFile $certificate = null,
        ?string $ip_address = null,
        ?int $max_connections = null,
        ?array $allowed_updates = null,
        ?bool $drop_pending_updates = null,
        ?string $secret_token = null,
    ): bool {
        return $this->raw('setWebhook', func_get_args());
    }

    /**
     * Use this method to remove webhook integration if you decide to switch back to <a href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>. Returns <em>True</em> on success.
     *
     * @param  bool  $drop_pending_updates  Pass <em>True</em> to drop all pending updates
     *
     * @throws TelegramException
     */
    public function deleteWebhook(?bool $drop_pending_updates = null): bool
    {
        return $this->raw('deleteWebhook', func_get_args());
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a <a href="https://core.telegram.org/bots/api#webhookinfo">WebhookInfo</a> object. If the bot is using <a href="https://core.telegram.org/bots/api#getupdates">getUpdates</a>, will return an object with the <em>url</em> field empty.
     *
     * @throws TelegramException
     */
    public function getWebhookInfo(): WebhookInfo
    {
        return $this->raw('getWebhookInfo', func_get_args());
    }

    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a <a href="https://core.telegram.org/bots/api#user">User</a> object.
     *
     * @throws TelegramException
     */
    public function getMe(): User
    {
        return $this->raw('getMe', func_get_args());
    }

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns <em>True</em> on success. Requires no parameters.
     *
     * @throws TelegramException
     */
    public function logOut(): bool
    {
        return $this->raw('logOut', func_get_args());
    }

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns <em>True</em> on success. Requires no parameters.
     *
     * @throws TelegramException
     */
    public function close(): bool
    {
        return $this->raw('close', func_get_args());
    }

    /**
     * Use this method to send text messages. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $text  Text of the message to be sent, 1-4096 characters after entities parsing
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions  $link_preview_options  Link preview generation options for the message
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendMessage(
        int|string $chat_id,
        string $text,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ParseMode|string|null $parse_mode = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendMessage', func_get_args());
    }

    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $from_chat_id  Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param  int  $message_id  Message identifier in the chat specified in <em>from_chat_id</em>
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the forwarded message from forwarding and saving
     *
     * @throws TelegramException
     */
    public function forwardMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
    ): Message {
        return $this->raw('forwardMessage', func_get_args());
    }

    /**
     * Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent messages is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $from_chat_id  Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
     * @param  int[]  $message_ids  A JSON-serialized list of 1-100 identifiers of messages in the chat <em>from_chat_id</em> to forward. The identifiers must be specified in a strictly increasing order.
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disable_notification  Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the forwarded messages from forwarding and saving
     *
     * @throws TelegramException
     */
    public function forwardMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
    ): Message {
        return $this->raw('forwardMessages', func_get_args());
    }

    /**
     * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz <a href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if the value of the field <em>correct_option_id</em> is known to the bot. The method is analogous to the method <a href="https://core.telegram.org/bots/api#forwardmessage">forwardMessage</a>, but the copied message doesn't have a link to the original message. Returns the <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent message on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $from_chat_id  Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param  int  $message_id  Message identifier in the chat specified in <em>from_chat_id</em>
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $caption  New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the new caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media. Ignored if a new caption isn't specified.
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function copyMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): MessageId {
        return $this->raw('copyMessage', func_get_args());
    }

    /**
     * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz <a href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if the value of the field <em>correct_option_id</em> is known to the bot. The method is analogous to the method <a href="https://core.telegram.org/bots/api#forwardmessages">forwardMessages</a>, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent messages is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int|string  $from_chat_id  Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
     * @param  int[]  $message_ids  A JSON-serialized list of 1-100 identifiers of messages in the chat <em>from_chat_id</em> to copy. The identifiers must be specified in a strictly increasing order.
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disable_notification  Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent messages from forwarding and saving
     * @param  bool  $remove_caption  Pass <em>True</em> to copy the messages without their captions
     *
     * @throws TelegramException
     */
    public function copyMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $remove_caption = null,
    ): Message {
        return $this->raw('copyMessages', func_get_args());
    }

    /**
     * Use this method to send photos. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $photo  Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $caption  Photo caption (may also be used when resending photos by <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media
     * @param  bool  $has_spoiler  Pass <em>True</em> if the photo needs to be covered with a spoiler animation
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendPhoto(
        int|string $chat_id,
        InputFile|string $photo,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendPhoto', func_get_args());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $audio  Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $caption  Audio caption, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the audio caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int  $duration  Duration of the audio in seconds
     * @param  string  $performer  Performer
     * @param  string  $title  Track name
     * @param  InputFile|string  $thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendAudio(
        int|string $chat_id,
        InputFile|string $audio,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        InputFile|string|null $thumbnail = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendAudio', func_get_args());
    }

    /**
     * Use this method to send general files. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $document  File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  InputFile|string  $thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption  Document caption (may also be used when resending documents by <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $disable_content_type_detection  Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendDocument(
        int|string $chat_id,
        InputFile|string $document,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_content_type_detection = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendDocument', func_get_args());
    }

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as <a href="https://core.telegram.org/bots/api#document">Document</a>). On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $video  Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  int  $duration  Duration of sent video in seconds
     * @param  int  $width  Video width
     * @param  int  $height  Video height
     * @param  InputFile|string  $thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption  Video caption (may also be used when resending videos by <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media
     * @param  bool  $has_spoiler  Pass <em>True</em> if the video needs to be covered with a spoiler animation
     * @param  bool  $supports_streaming  Pass <em>True</em> if the uploaded video is suitable for streaming
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendVideo(
        int|string $chat_id,
        InputFile|string $video,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $supports_streaming = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendVideo', func_get_args());
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $animation  Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  int  $duration  Duration of sent animation in seconds
     * @param  int  $width  Animation width
     * @param  int  $height  Animation height
     * @param  InputFile|string  $thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption  Animation caption (may also be used when resending animation by <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the animation caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media
     * @param  bool  $has_spoiler  Pass <em>True</em> if the animation needs to be covered with a spoiler animation
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendAnimation(
        int|string $chat_id,
        InputFile|string $animation,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendAnimation', func_get_args());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as <a href="https://core.telegram.org/bots/api#audio">Audio</a> or <a href="https://core.telegram.org/bots/api#document">Document</a>). On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $voice  Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $caption  Voice message caption, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the voice message caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int  $duration  Duration of the voice message in seconds
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendVoice(
        int|string $chat_id,
        InputFile|string $voice,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendVoice', func_get_args());
    }

    /**
     * As of <a href="https://telegram.org/blog/video-messages-and-telescope">v.4.0</a>, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $video_note  Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>. Sending video notes by a URL is currently unsupported
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  int  $duration  Duration of sent video in seconds
     * @param  int  $length  Video width and height, i.e. diameter of the video message
     * @param  InputFile|string  $thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendVideoNote(
        int|string $chat_id,
        InputFile|string $video_note,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $length = null,
        InputFile|string|null $thumbnail = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendVideoNote', func_get_args());
    }

    /**
     * Use this method to send paid media. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
     * @param  int  $star_count  The number of Telegram Stars that must be paid to buy access to the media; 1-2500
     * @param  InputPaidMedia[]  $media  A JSON-serialized array describing the media to be sent; up to 10 items
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  string  $payload  Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param  string  $caption  Media caption, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the media caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendPaidMedia(
        int|string $chat_id,
        int $star_count,
        array $media,
        ?string $business_connection_id = null,
        ?string $payload = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendPaidMedia', func_get_args());
    }

    /**
     * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of <a href="https://core.telegram.org/bots/api#message">Messages</a> that were sent is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputMediaAudio[]|InputMediaDocument[]|InputMediaPhoto[]|InputMediaVideo[]  $media  A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disable_notification  Sends messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent messages from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @return Message[]
     *
     * @throws TelegramException
     */
    public function sendMediaGroup(
        int|string $chat_id,
        array $media,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
    ): array {
        return $this->raw('sendMediaGroup', func_get_args());
    }

    /**
     * Use this method to send point on the map. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  float  $latitude  Latitude of the location
     * @param  float  $longitude  Longitude of the location
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  float  $horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @param  int  $live_period  Period in seconds during which the location will be updated (see <a href="https://telegram.org/blog/live-locations">Live Locations</a>, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param  int  $heading  For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param  int  $proximity_alert_radius  For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendLocation(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendLocation', func_get_args());
    }

    /**
     * Use this method to send information about a venue. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  float  $latitude  Latitude of the venue
     * @param  float  $longitude  Longitude of the venue
     * @param  string  $title  Name of the venue
     * @param  string  $address  Address of the venue
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $foursquare_id  Foursquare identifier of the venue
     * @param  string  $foursquare_type  Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param  string  $google_place_id  Google Places identifier of the venue
     * @param  string  $google_place_type  Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendVenue(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendVenue', func_get_args());
    }

    /**
     * Use this method to send phone contacts. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $phone_number  Contact's phone number
     * @param  string  $first_name  Contact's first name
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $last_name  Contact's last name
     * @param  string  $vcard  Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendContact(
        int|string $chat_id,
        string $phone_number,
        string $first_name,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $last_name = null,
        ?string $vcard = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendContact', func_get_args());
    }

    /**
     * Use this method to send a native poll. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $question  Poll question, 1-300 characters
     * @param  InputPollOption[]  $options  A JSON-serialized list of 2-10 answer options
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $question_parse_mode  Mode for parsing entities in the question. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. Currently, only custom emoji entities are allowed
     * @param  MessageEntity[]  $question_entities  A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of <em>question_parse_mode</em>
     * @param  bool  $is_anonymous  <em>True</em>, if the poll needs to be anonymous, defaults to <em>True</em>
     * @param  string  $type  Poll type, “quiz” or “regular”, defaults to “regular”
     * @param  bool  $allows_multiple_answers  <em>True</em>, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to <em>False</em>
     * @param  int  $correct_option_id  0-based identifier of the correct answer option, required for polls in quiz mode
     * @param  string  $explanation  Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @param  string  $explanation_parse_mode  Mode for parsing entities in the explanation. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $explanation_entities  A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of <em>explanation_parse_mode</em>
     * @param  int  $open_period  Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with <em>close_date</em>.
     * @param  int  $close_date  Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with <em>open_period</em>.
     * @param  bool  $is_closed  Pass <em>True</em> if the poll needs to be immediately closed. This can be useful for poll preview.
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendPoll(
        int|string $chat_id,
        string $question,
        array $options,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $question_parse_mode = null,
        ?array $question_entities = null,
        ?bool $is_anonymous = null,
        ?string $type = null,
        ?bool $allows_multiple_answers = null,
        ?int $correct_option_id = null,
        ?string $explanation = null,
        ?string $explanation_parse_mode = null,
        ?array $explanation_entities = null,
        ?int $open_period = null,
        ?int $close_date = null,
        ?bool $is_closed = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendPoll', func_get_args());
    }

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $emoji  Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendDice(
        int|string $chat_id,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendDice', func_get_args());
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  ChatActionType|string  $action  Type of action to broadcast. Choose one, depending on what the user is about to receive: <em>typing</em> for <a href="https://core.telegram.org/bots/api#sendmessage">text messages</a>, <em>upload_photo</em> for <a href="https://core.telegram.org/bots/api#sendphoto">photos</a>, <em>record_video</em> or <em>upload_video</em> for <a href="https://core.telegram.org/bots/api#sendvideo">videos</a>, <em>record_voice</em> or <em>upload_voice</em> for <a href="https://core.telegram.org/bots/api#sendvoice">voice notes</a>, <em>upload_document</em> for <a href="https://core.telegram.org/bots/api#senddocument">general files</a>, <em>choose_sticker</em> for <a href="https://core.telegram.org/bots/api#sendsticker">stickers</a>, <em>find_location</em> for <a href="https://core.telegram.org/bots/api#sendlocation">location data</a>, <em>record_video_note</em> or <em>upload_video_note</em> for <a href="https://core.telegram.org/bots/api#sendvideonote">video notes</a>.
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the action will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread; for supergroups only
     *
     * @throws TelegramException
     */
    public function sendChatAction(
        int|string $chat_id,
        ChatActionType|string $action,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
    ): bool {
        return $this->raw('sendChatAction', func_get_args());
    }

    /**
     * Use this method to change the chosen reactions on a message. Service messages can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     * @param  ReactionType[]  $reaction  A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
     * @param  bool  $is_big  Pass <em>True</em> to set the reaction with a big animation
     *
     * @throws TelegramException
     */
    public function setMessageReaction(
        int|string $chat_id,
        int $message_id,
        ?array $reaction = null,
        ?bool $is_big = null,
    ): bool {
        return $this->raw('setMessageReaction', func_get_args());
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a <a href="https://core.telegram.org/bots/api#userprofilephotos">UserProfilePhotos</a> object.
     *
     * @param  int  $user_id  Unique identifier of the target user
     * @param  int  $offset  Sequential number of the first photo to be returned. By default, all photos are returned.
     * @param  int  $limit  Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @throws TelegramException
     */
    public function getUserProfilePhotos(int $user_id, ?int $offset = null, ?int $limit = null): UserProfilePhotos
    {
        return $this->raw('getUserProfilePhotos', func_get_args());
    }

    /**
     * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestEmojiStatusAccess</a>. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  Unique identifier of the target user
     * @param  string  $emoji_status_custom_emoji_id  Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     * @param  int  $emoji_status_expiration_date  Expiration date of the emoji status, if any
     *
     * @throws TelegramException
     */
    public function setUserEmojiStatus(
        int $user_id,
        ?string $emoji_status_custom_emoji_id = null,
        ?int $emoji_status_expiration_date = null,
    ): bool {
        return $this->raw('setUserEmojiStatus', func_get_args());
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a <a href="https://core.telegram.org/bots/api#file">File</a> object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling <a href="https://core.telegram.org/bots/api#getfile">getFile</a> again.
     *
     * @param  string  $file_id  File identifier to get information about
     *
     * @throws TelegramException
     */
    public function getFile(string $file_id): File
    {
        return $this->raw('getFile', func_get_args());
    }

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless <a href="https://core.telegram.org/bots/api#unbanchatmember">unbanned</a> first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     * @param  int  $until_date  Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @param  bool  $revoke_messages  Pass <em>True</em> to delete all messages from the chat for the user that is being removed. If <em>False</em>, the user will be able to see messages in the group that were sent before the user was removed. Always <em>True</em> for supergroups and channels.
     *
     * @throws TelegramException
     */
    public function banChatMember(
        int|string $chat_id,
        int $user_id,
        ?int $until_date = null,
        ?bool $revoke_messages = null,
    ): bool {
        return $this->raw('banChatMember', func_get_args());
    }

    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter <em>only_if_banned</em>. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     * @param  bool  $only_if_banned  Do nothing if the user is not banned
     *
     * @throws TelegramException
     */
    public function unbanChatMember(int|string $chat_id, int $user_id, ?bool $only_if_banned = null): bool
    {
        return $this->raw('unbanChatMember', func_get_args());
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass <em>True</em> for all permissions to lift restrictions from a user. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $user_id  Unique identifier of the target user
     * @param  ChatPermissions  $permissions  A JSON-serialized object for new user permissions
     * @param  bool  $use_independent_chat_permissions  Pass <em>True</em> if chat permissions are set independently. Otherwise, the <em>can_send_other_messages</em> and <em>can_add_web_page_previews</em> permissions will imply the <em>can_send_messages</em>, <em>can_send_audios</em>, <em>can_send_documents</em>, <em>can_send_photos</em>, <em>can_send_videos</em>, <em>can_send_video_notes</em>, and <em>can_send_voice_notes</em> permissions; the <em>can_send_polls</em> permission will imply the <em>can_send_messages</em> permission.
     * @param  int  $until_date  Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     *
     * @throws TelegramException
     */
    public function restrictChatMember(
        int|string $chat_id,
        int $user_id,
        ChatPermissions $permissions,
        ?bool $use_independent_chat_permissions = null,
        ?int $until_date = null,
    ): bool {
        return $this->raw('restrictChatMember', func_get_args());
    }

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass <em>False</em> for all boolean parameters to demote a user. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     * @param  bool  $is_anonymous  Pass <em>True</em> if the administrator's presence in the chat is hidden
     * @param  bool  $can_manage_chat  Pass <em>True</em> if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
     * @param  bool  $can_delete_messages  Pass <em>True</em> if the administrator can delete messages of other users
     * @param  bool  $can_manage_video_chats  Pass <em>True</em> if the administrator can manage video chats
     * @param  bool  $can_restrict_members  Pass <em>True</em> if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @param  bool  $can_promote_members  Pass <em>True</em> if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @param  bool  $can_change_info  Pass <em>True</em> if the administrator can change chat title, photo and other settings
     * @param  bool  $can_invite_users  Pass <em>True</em> if the administrator can invite new users to the chat
     * @param  bool  $can_post_stories  Pass <em>True</em> if the administrator can post stories to the chat
     * @param  bool  $can_edit_stories  Pass <em>True</em> if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @param  bool  $can_delete_stories  Pass <em>True</em> if the administrator can delete stories posted by other users
     * @param  bool  $can_post_messages  Pass <em>True</em> if the administrator can post messages in the channel, or access channel statistics; for channels only
     * @param  bool  $can_edit_messages  Pass <em>True</em> if the administrator can edit messages of other users and can pin messages; for channels only
     * @param  bool  $can_pin_messages  Pass <em>True</em> if the administrator can pin messages; for supergroups only
     * @param  bool  $can_manage_topics  Pass <em>True</em> if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     *
     * @throws TelegramException
     */
    public function promoteChatMember(
        int|string $chat_id,
        int $user_id,
        ?bool $is_anonymous = null,
        ?bool $can_manage_chat = null,
        ?bool $can_delete_messages = null,
        ?bool $can_manage_video_chats = null,
        ?bool $can_restrict_members = null,
        ?bool $can_promote_members = null,
        ?bool $can_change_info = null,
        ?bool $can_invite_users = null,
        ?bool $can_post_stories = null,
        ?bool $can_edit_stories = null,
        ?bool $can_delete_stories = null,
        ?bool $can_post_messages = null,
        ?bool $can_edit_messages = null,
        ?bool $can_pin_messages = null,
        ?bool $can_manage_topics = null,
    ): bool {
        return $this->raw('promoteChatMember', func_get_args());
    }

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $user_id  Unique identifier of the target user
     * @param  string  $custom_title  New custom title for the administrator; 0-16 characters, emoji are not allowed
     *
     * @throws TelegramException
     */
    public function setChatAdministratorCustomTitle(int|string $chat_id, int $user_id, string $custom_title): bool
    {
        return $this->raw('setChatAdministratorCustomTitle', func_get_args());
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is <a href="https://core.telegram.org/bots/api#unbanchatsenderchat">unbanned</a>, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $sender_chat_id  Unique identifier of the target sender chat
     *
     * @throws TelegramException
     */
    public function banChatSenderChat(int|string $chat_id, int $sender_chat_id): bool
    {
        return $this->raw('banChatSenderChat', func_get_args());
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $sender_chat_id  Unique identifier of the target sender chat
     *
     * @throws TelegramException
     */
    public function unbanChatSenderChat(int|string $chat_id, int $sender_chat_id): bool
    {
        return $this->raw('unbanChatSenderChat', func_get_args());
    }

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the <em>can_restrict_members</em> administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  ChatPermissions  $permissions  A JSON-serialized object for new default chat permissions
     * @param  bool  $use_independent_chat_permissions  Pass <em>True</em> if chat permissions are set independently. Otherwise, the <em>can_send_other_messages</em> and <em>can_add_web_page_previews</em> permissions will imply the <em>can_send_messages</em>, <em>can_send_audios</em>, <em>can_send_documents</em>, <em>can_send_photos</em>, <em>can_send_videos</em>, <em>can_send_video_notes</em>, and <em>can_send_voice_notes</em> permissions; the <em>can_send_polls</em> permission will imply the <em>can_send_messages</em> permission.
     *
     * @throws TelegramException
     */
    public function setChatPermissions(
        int|string $chat_id,
        ChatPermissions $permissions,
        ?bool $use_independent_chat_permissions = null,
    ): bool {
        return $this->raw('setChatPermissions', func_get_args());
    }

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as <em>String</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function exportChatInviteLink(int|string $chat_id): string
    {
        return $this->raw('exportChatInviteLink', func_get_args());
    }

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method <a href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite link as <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $name  Invite link name; 0-32 characters
     * @param  int  $expire_date  Point in time (Unix timestamp) when the link will expire
     * @param  int  $member_limit  The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param  bool  $creates_join_request  <em>True</em>, if users joining the chat via the link need to be approved by chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified
     *
     * @throws TelegramException
     */
    public function createChatInviteLink(
        int|string $chat_id,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink {
        return $this->raw('createChatInviteLink', func_get_args());
    }

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $invite_link  The invite link to edit
     * @param  string  $name  Invite link name; 0-32 characters
     * @param  int  $expire_date  Point in time (Unix timestamp) when the link will expire
     * @param  int  $member_limit  The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param  bool  $creates_join_request  <em>True</em>, if users joining the chat via the link need to be approved by chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified
     *
     * @throws TelegramException
     */
    public function editChatInviteLink(
        int|string $chat_id,
        string $invite_link,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink {
        return $this->raw('editChatInviteLink', func_get_args());
    }

    /**
     * Use this method to create a <a href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription invite link</a> for a channel chat. The bot must have the <em>can_invite_users</em> administrator rights. The link can be edited using the method <a href="https://core.telegram.org/bots/api#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a> or revoked using the method <a href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite link as a <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
     * @param  int  $subscription_period  The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
     * @param  int  $subscription_price  The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500
     * @param  string  $name  Invite link name; 0-32 characters
     *
     * @throws TelegramException
     */
    public function createChatSubscriptionInviteLink(
        int|string $chat_id,
        int $subscription_period,
        int $subscription_price,
        ?string $name = null,
    ): ChatInviteLink {
        return $this->raw('createChatSubscriptionInviteLink', func_get_args());
    }

    /**
     * Use this method to edit a subscription invite link created by the bot. The bot must have the <em>can_invite_users</em> administrator rights. Returns the edited invite link as a <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $invite_link  The invite link to edit
     * @param  string  $name  Invite link name; 0-32 characters
     *
     * @throws TelegramException
     */
    public function editChatSubscriptionInviteLink(
        int|string $chat_id,
        string $invite_link,
        ?string $name = null,
    ): ChatInviteLink {
        return $this->raw('editChatSubscriptionInviteLink', func_get_args());
    }

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier of the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $invite_link  The invite link to revoke
     *
     * @throws TelegramException
     */
    public function revokeChatInviteLink(int|string $chat_id, string $invite_link): ChatInviteLink
    {
        return $this->raw('revokeChatInviteLink', func_get_args());
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     *
     * @throws TelegramException
     */
    public function approveChatJoinRequest(int|string $chat_id, int $user_id): bool
    {
        return $this->raw('approveChatJoinRequest', func_get_args());
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     *
     * @throws TelegramException
     */
    public function declineChatJoinRequest(int|string $chat_id, int $user_id): bool
    {
        return $this->raw('declineChatJoinRequest', func_get_args());
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile  $photo  New chat photo, uploaded using multipart/form-data
     *
     * @throws TelegramException
     */
    public function setChatPhoto(int|string $chat_id, InputFile $photo): bool
    {
        return $this->raw('setChatPhoto', func_get_args());
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function deleteChatPhoto(int|string $chat_id): bool
    {
        return $this->raw('deleteChatPhoto', func_get_args());
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $title  New chat title, 1-128 characters
     *
     * @throws TelegramException
     */
    public function setChatTitle(int|string $chat_id, string $title): bool
    {
        return $this->raw('setChatTitle', func_get_args());
    }

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $description  New chat description, 0-255 characters
     *
     * @throws TelegramException
     */
    public function setChatDescription(int|string $chat_id, ?string $description = null): bool
    {
        return $this->raw('setChatDescription', func_get_args());
    }

    /**
     * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Identifier of a message to pin
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be pinned
     * @param  bool  $disable_notification  Pass <em>True</em> if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     *
     * @throws TelegramException
     */
    public function pinChatMessage(
        int|string $chat_id,
        int $message_id,
        ?string $business_connection_id = null,
        ?bool $disable_notification = null,
    ): bool {
        return $this->raw('pinChatMessage', func_get_args());
    }

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be unpinned
     * @param  int  $message_id  Identifier of the message to unpin. Required if <em>business_connection_id</em> is specified. If not specified, the most recent pinned message (by sending date) will be unpinned.
     *
     * @throws TelegramException
     */
    public function unpinChatMessage(
        int|string $chat_id,
        ?string $business_connection_id = null,
        ?int $message_id = null,
    ): bool {
        return $this->raw('unpinChatMessage', func_get_args());
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function unpinAllChatMessages(int|string $chat_id): bool
    {
        return $this->raw('unpinAllChatMessages', func_get_args());
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function leaveChat(int|string $chat_id): bool
    {
        return $this->raw('leaveChat', func_get_args());
    }

    /**
     * Use this method to get up-to-date information about the chat. Returns a <a href="https://core.telegram.org/bots/api#chatfullinfo">ChatFullInfo</a> object on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function getChat(int|string $chat_id): ChatFullInfo
    {
        return $this->raw('getChat', func_get_args());
    }

    /**
     * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> objects.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @return ChatMember[]
     *
     * @throws TelegramException
     */
    public function getChatAdministrators(int|string $chat_id): array
    {
        return $this->raw('getChatAdministrators', func_get_args());
    }

    /**
     * Use this method to get the number of members in a chat. Returns <em>Int</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     *
     * @throws TelegramException
     */
    public function getChatMemberCount(int|string $chat_id): int
    {
        return $this->raw('getChatMemberCount', func_get_args());
    }

    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> object on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     *
     * @throws TelegramException
     */
    public function getChatMember(int|string $chat_id, int $user_id): ChatMember
    {
        return $this->raw('getChatMember', func_get_args());
    }

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field <em>can_set_sticker_set</em> optionally returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a> requests to check if the bot can use this method. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  string  $sticker_set_name  Name of the sticker set to be set as the group sticker set
     *
     * @throws TelegramException
     */
    public function setChatStickerSet(int|string $chat_id, string $sticker_set_name): bool
    {
        return $this->raw('setChatStickerSet', func_get_args());
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field <em>can_set_sticker_set</em> optionally returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a> requests to check if the bot can use this method. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function deleteChatStickerSet(int|string $chat_id): bool
    {
        return $this->raw('deleteChatStickerSet', func_get_args());
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of <a href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     * @return Sticker[]
     *
     * @throws TelegramException
     */
    public function getForumTopicIconStickers(): array
    {
        return $this->raw('getForumTopicIconStickers', func_get_args());
    }

    /**
     * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns information about the created topic as a <a href="https://core.telegram.org/bots/api#forumtopic">ForumTopic</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  string  $name  Topic name, 1-128 characters
     * @param  int  $icon_color  Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @param  string  $icon_custom_emoji_id  Unique identifier of the custom emoji shown as the topic icon. Use <a href="https://core.telegram.org/bots/api#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji identifiers.
     *
     * @throws TelegramException
     */
    public function createForumTopic(
        int|string $chat_id,
        string $name,
        ?int $icon_color = null,
        ?string $icon_custom_emoji_id = null,
    ): ForumTopic {
        return $this->raw('createForumTopic', func_get_args());
    }

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $message_thread_id  Unique identifier for the target message thread of the forum topic
     * @param  string  $name  New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
     * @param  string  $icon_custom_emoji_id  New unique identifier of the custom emoji shown as the topic icon. Use <a href="https://core.telegram.org/bots/api#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
     *
     * @throws TelegramException
     */
    public function editForumTopic(
        int|string $chat_id,
        int $message_thread_id,
        ?string $name = null,
        ?string $icon_custom_emoji_id = null,
    ): bool {
        return $this->raw('editForumTopic', func_get_args());
    }

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $message_thread_id  Unique identifier for the target message thread of the forum topic
     *
     * @throws TelegramException
     */
    public function closeForumTopic(int|string $chat_id, int $message_thread_id): bool
    {
        return $this->raw('closeForumTopic', func_get_args());
    }

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $message_thread_id  Unique identifier for the target message thread of the forum topic
     *
     * @throws TelegramException
     */
    public function reopenForumTopic(int|string $chat_id, int $message_thread_id): bool
    {
        return $this->raw('reopenForumTopic', func_get_args());
    }

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_delete_messages</em> administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $message_thread_id  Unique identifier for the target message thread of the forum topic
     *
     * @throws TelegramException
     */
    public function deleteForumTopic(int|string $chat_id, int $message_thread_id): bool
    {
        return $this->raw('deleteForumTopic', func_get_args());
    }

    /**
     * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the <em>can_pin_messages</em> administrator right in the supergroup. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $message_thread_id  Unique identifier for the target message thread of the forum topic
     *
     * @throws TelegramException
     */
    public function unpinAllForumTopicMessages(int|string $chat_id, int $message_thread_id): bool
    {
        return $this->raw('unpinAllForumTopicMessages', func_get_args());
    }

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  string  $name  New topic name, 1-128 characters
     *
     * @throws TelegramException
     */
    public function editGeneralForumTopic(int|string $chat_id, string $name): bool
    {
        return $this->raw('editGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function closeGeneralForumTopic(int|string $chat_id): bool
    {
        return $this->raw('closeGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. The topic will be automatically unhidden if it was hidden. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function reopenGeneralForumTopic(int|string $chat_id): bool
    {
        return $this->raw('reopenGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. The topic will be automatically closed if it was open. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function hideGeneralForumTopic(int|string $chat_id): bool
    {
        return $this->raw('hideGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function unhideGeneralForumTopic(int|string $chat_id): bool
    {
        return $this->raw('unhideGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the <em>can_pin_messages</em> administrator right in the supergroup. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     *
     * @throws TelegramException
     */
    public function unpinAllGeneralForumTopicMessages(int|string $chat_id): bool
    {
        return $this->raw('unpinAllGeneralForumTopicMessages', func_get_args());
    }

    /**
     * Use this method to send answers to callback queries sent from <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboards</a>. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, <em>True</em> is returned.
     *
     * @param  string  $callback_query_id  Unique identifier for the query to be answered
     * @param  string  $text  Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * @param  bool  $show_alert  If <em>True</em>, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to <em>false</em>.
     * @param  string  $url  URL that will be opened by the user's client. If you have created a <a href="https://core.telegram.org/bots/api#game">Game</a> and accepted the conditions via <a href="https://t.me/botfather">@BotFather</a>, specify the URL that opens your game - note that this will only work if the query comes from a <a href="https://core.telegram.org/bots/api#inlinekeyboardbutton"><em>callback_game</em></a> button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     * @param  int  $cache_time  The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     *
     * @throws TelegramException
     */
    public function answerCallbackQuery(
        string $callback_query_id,
        ?string $text = null,
        ?bool $show_alert = null,
        ?string $url = null,
        ?int $cache_time = null,
    ): bool {
        return $this->raw('answerCallbackQuery', func_get_args());
    }

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a <a href="https://core.telegram.org/bots/api#userchatboosts">UserChatBoosts</a> object.
     *
     * @param  int|string  $chat_id  Unique identifier for the chat or username of the channel (in the format @channelusername)
     * @param  int  $user_id  Unique identifier of the target user
     *
     * @throws TelegramException
     */
    public function getUserChatBoosts(int|string $chat_id, int $user_id): UserChatBoosts
    {
        return $this->raw('getUserChatBoosts', func_get_args());
    }

    /**
     * Use this method to get information about the connection of the bot with a business account. Returns a <a href="https://core.telegram.org/bots/api#businessconnection">BusinessConnection</a> object on success.
     *
     * @param  string  $business_connection_id  Unique identifier of the business connection
     *
     * @throws TelegramException
     */
    public function getBusinessConnection(string $business_connection_id): BusinessConnection
    {
        return $this->raw('getBusinessConnection', func_get_args());
    }

    /**
     * Use this method to change the list of the bot's commands. See <a href="https://core.telegram.org/bots/features#commands">this manual</a> for more details about bot commands. Returns <em>True</em> on success.
     *
     * @param  BotCommand[]  $commands  A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     * @param  BotCommandScope  $scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to <a href="https://core.telegram.org/bots/api#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string  $language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     *
     * @throws TelegramException
     */
    public function setMyCommands(
        array $commands,
        ?BotCommandScope $scope = null,
        ?string $language_code = null,
    ): bool {
        return $this->raw('setMyCommands', func_get_args());
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, <a href="https://core.telegram.org/bots/api#determining-list-of-commands">higher level commands</a> will be shown to affected users. Returns <em>True</em> on success.
     *
     * @param  BotCommandScope  $scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to <a href="https://core.telegram.org/bots/api#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string  $language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     *
     * @throws TelegramException
     */
    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): bool
    {
        return $this->raw('deleteMyCommands', func_get_args());
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of <a href="https://core.telegram.org/bots/api#botcommand">BotCommand</a> objects. If commands aren't set, an empty list is returned.
     *
     * @param  BotCommandScope  $scope  A JSON-serialized object, describing scope of users. Defaults to <a href="https://core.telegram.org/bots/api#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string  $language_code  A two-letter ISO 639-1 language code or an empty string
     * @return BotCommand[]
     *
     * @throws TelegramException
     */
    public function getMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): array
    {
        return $this->raw('getMyCommands', func_get_args());
    }

    /**
     * Use this method to change the bot's name. Returns <em>True</em> on success.
     *
     * @param  string  $name  New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
     * @param  string  $language_code  A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
     *
     * @throws TelegramException
     */
    public function setMyName(?string $name = null, ?string $language_code = null): bool
    {
        return $this->raw('setMyName', func_get_args());
    }

    /**
     * Use this method to get the current bot name for the given user language. Returns <a href="https://core.telegram.org/bots/api#botname">BotName</a> on success.
     *
     * @param  string  $language_code  A two-letter ISO 639-1 language code or an empty string
     *
     * @throws TelegramException
     */
    public function getMyName(?string $language_code = null): BotName
    {
        return $this->raw('getMyName', func_get_args());
    }

    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns <em>True</em> on success.
     *
     * @param  string  $description  New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
     * @param  string  $language_code  A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
     *
     * @throws TelegramException
     */
    public function setMyDescription(?string $description = null, ?string $language_code = null): bool
    {
        return $this->raw('setMyDescription', func_get_args());
    }

    /**
     * Use this method to get the current bot description for the given user language. Returns <a href="https://core.telegram.org/bots/api#botdescription">BotDescription</a> on success.
     *
     * @param  string  $language_code  A two-letter ISO 639-1 language code or an empty string
     *
     * @throws TelegramException
     */
    public function getMyDescription(?string $language_code = null): BotDescription
    {
        return $this->raw('getMyDescription', func_get_args());
    }

    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns <em>True</em> on success.
     *
     * @param  string  $short_description  New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
     * @param  string  $language_code  A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
     *
     * @throws TelegramException
     */
    public function setMyShortDescription(?string $short_description = null, ?string $language_code = null): bool
    {
        return $this->raw('setMyShortDescription', func_get_args());
    }

    /**
     * Use this method to get the current bot short description for the given user language. Returns <a href="https://core.telegram.org/bots/api#botshortdescription">BotShortDescription</a> on success.
     *
     * @param  string  $language_code  A two-letter ISO 639-1 language code or an empty string
     *
     * @throws TelegramException
     */
    public function getMyShortDescription(?string $language_code = null): BotShortDescription
    {
        return $this->raw('getMyShortDescription', func_get_args());
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns <em>True</em> on success.
     *
     * @param  int  $chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @param  MenuButton  $menu_button  A JSON-serialized object for the bot's new menu button. Defaults to <a href="https://core.telegram.org/bots/api#menubuttondefault">MenuButtonDefault</a>
     *
     * @throws TelegramException
     */
    public function setChatMenuButton(?int $chat_id = null, ?MenuButton $menu_button = null): bool
    {
        return $this->raw('setChatMenuButton', func_get_args());
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns <a href="https://core.telegram.org/bots/api#menubutton">MenuButton</a> on success.
     *
     * @param  int  $chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     *
     * @throws TelegramException
     */
    public function getChatMenuButton(?int $chat_id = null): MenuButton
    {
        return $this->raw('getChatMenuButton', func_get_args());
    }

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns <em>True</em> on success.
     *
     * @param  ChatAdministratorRights  $rights  A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @param  bool  $for_channels  Pass <em>True</em> to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     *
     * @throws TelegramException
     */
    public function setMyDefaultAdministratorRights(
        ?ChatAdministratorRights $rights = null,
        ?bool $for_channels = null,
    ): bool {
        return $this->raw('setMyDefaultAdministratorRights', func_get_args());
    }

    /**
     * Use this method to get the current default administrator rights of the bot. Returns <a href="https://core.telegram.org/bots/api#chatadministratorrights">ChatAdministratorRights</a> on success.
     *
     * @param  bool  $for_channels  Pass <em>True</em> to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     *
     * @throws TelegramException
     */
    public function getMyDefaultAdministratorRights(?bool $for_channels = null): ChatAdministratorRights
    {
        return $this->raw('getMyDefaultAdministratorRights', func_get_args());
    }

    /**
     * Use this method to edit text and <a href="https://core.telegram.org/bots/api#games">game</a> messages. On success, if the edited message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  string  $text  New text of the message, 1-4096 characters after entities parsing
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions  $link_preview_options  Link preview generation options for the message
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function editMessageText(
        string $text,
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ParseMode|string|null $parse_mode = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('editMessageText', func_get_args());
    }

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  string  $caption  New caption of the message, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the message caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  Pass <em>True</em>, if the caption must be shown above the message media. Supported only for animation, photo and video messages.
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function editMessageCaption(
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('editMessageCaption', func_get_args());
    }

    /**
     * Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  InputMedia  $media  A JSON-serialized object for a new media content of the message
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function editMessageMedia(
        InputMedia $media,
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('editMessageMedia', func_get_args());
    }

    /**
     * Use this method to edit live location messages. A location can be edited until its <em>live_period</em> expires or editing is explicitly disabled by a call to <a href="https://core.telegram.org/bots/api#stopmessagelivelocation">stopMessageLiveLocation</a>. On success, if the edited message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned.
     *
     * @param  float  $latitude  Latitude of new location
     * @param  float  $longitude  Longitude of new location
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  int  $live_period  New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current <em>live_period</em> by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then <em>live_period</em> remains unchanged
     * @param  float  $horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @param  int  $heading  Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param  int  $proximity_alert_radius  The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?int $live_period = null,
        ?float $horizontal_accuracy = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('editMessageLiveLocation', func_get_args());
    }

    /**
     * Use this method to stop updating a live location message before <em>live_period</em> expires. On success, if the message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned.
     *
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message with live location to stop
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function stopMessageLiveLocation(
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('stopMessageLiveLocation', func_get_args());
    }

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  int|string  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function editMessageReplyMarkup(
        ?string $business_connection_id = null,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message|bool {
        return $this->raw('editMessageReplyMarkup', func_get_args());
    }

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped <a href="https://core.telegram.org/bots/api#poll">Poll</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Identifier of the original message with the poll
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for a new message <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.
     *
     * @throws TelegramException
     */
    public function stopPoll(
        int|string $chat_id,
        int $message_id,
        ?string $business_connection_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Poll {
        return $this->raw('stopPoll', func_get_args());
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted <em>can_post_messages</em> permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has <em>can_delete_messages</em> permission in a supergroup or a channel, it can delete any message there.Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int  $message_id  Identifier of the message to delete
     *
     * @throws TelegramException
     */
    public function deleteMessage(int|string $chat_id, int $message_id): bool
    {
        return $this->raw('deleteMessage', func_get_args());
    }

    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns <em>True</em> on success.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  int[]  $message_ids  A JSON-serialized list of 1-100 identifiers of messages to delete. See <a href="https://core.telegram.org/bots/api#deletemessage">deleteMessage</a> for limitations on which messages can be deleted
     *
     * @throws TelegramException
     */
    public function deleteMessages(int|string $chat_id, array $message_ids): bool
    {
        return $this->raw('deleteMessages', func_get_args());
    }

    /**
     * Use this method to send static .WEBP, <a href="https://telegram.org/blog/animated-stickers">animated</a> .TGS, or <a href="https://telegram.org/blog/video-stickers-better-reactions">video</a> .WEBM stickers. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  InputFile|string  $sticker  Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>. Video and animated stickers can't be sent via an HTTP URL.
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $emoji  Emoji associated with the sticker; only for just uploaded stickers
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @throws TelegramException
     */
    public function sendSticker(
        int|string $chat_id,
        InputFile|string $sticker,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message {
        return $this->raw('sendSticker', func_get_args());
    }

    /**
     * Use this method to get a sticker set. On success, a <a href="https://core.telegram.org/bots/api#stickerset">StickerSet</a> object is returned.
     *
     * @param  string  $name  Name of the sticker set
     *
     * @throws TelegramException
     */
    public function getStickerSet(string $name): StickerSet
    {
        return $this->raw('getStickerSet', func_get_args());
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of <a href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     * @param  string[]  $custom_emoji_ids  A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     * @return Sticker[]
     *
     * @throws TelegramException
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids): array
    {
        return $this->raw('getCustomEmojiStickers', func_get_args());
    }

    /**
     * Use this method to upload a file with a sticker for later use in the <a href="https://core.telegram.org/bots/api#createnewstickerset">createNewStickerSet</a>, <a href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>, or <a href="https://core.telegram.org/bots/api#replacestickerinset">replaceStickerInSet</a> methods (the file can be used multiple times). Returns the uploaded <a href="https://core.telegram.org/bots/api#file">File</a> on success.
     *
     * @param  int  $user_id  User identifier of sticker file owner
     * @param  InputFile  $sticker  A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See <a href="https://core.telegram.org/stickers"><a href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a></a> for technical requirements. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $sticker_format  Format of the sticker, must be one of “static”, “animated”, “video”
     *
     * @throws TelegramException
     */
    public function uploadStickerFile(int $user_id, InputFile $sticker, string $sticker_format): File
    {
        return $this->raw('uploadStickerFile', func_get_args());
    }

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  User identifier of created sticker set owner
     * @param  string  $name  Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., <em>animals</em>). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
     * @param  string  $title  Sticker set title, 1-64 characters
     * @param  InputSticker[]  $stickers  A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     * @param  StickerType|string  $sticker_type  Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a regular sticker set is created.
     * @param  bool  $needs_repainting  Pass <em>True</em> if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
     *
     * @throws TelegramException
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        array $stickers,
        StickerType|string|null $sticker_type = null,
        ?bool $needs_repainting = null,
    ): bool {
        return $this->raw('createNewStickerSet', func_get_args());
    }

    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  User identifier of sticker set owner
     * @param  string  $name  Sticker set name
     * @param  InputSticker  $sticker  A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
     *
     * @throws TelegramException
     */
    public function addStickerToSet(int $user_id, string $name, InputSticker $sticker): bool
    {
        return $this->raw('addStickerToSet', func_get_args());
    }

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns <em>True</em> on success.
     *
     * @param  string  $sticker  File identifier of the sticker
     * @param  int  $position  New sticker position in the set, zero-based
     *
     * @throws TelegramException
     */
    public function setStickerPositionInSet(string $sticker, int $position): bool
    {
        return $this->raw('setStickerPositionInSet', func_get_args());
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string  $sticker  File identifier of the sticker
     *
     * @throws TelegramException
     */
    public function deleteStickerFromSet(string $sticker): bool
    {
        return $this->raw('deleteStickerFromSet', func_get_args());
    }

    /**
     * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling <a href="https://core.telegram.org/bots/api#deletestickerfromset">deleteStickerFromSet</a>, then <a href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>, then <a href="https://core.telegram.org/bots/api#setstickerpositioninset">setStickerPositionInSet</a>. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  User identifier of the sticker set owner
     * @param  string  $name  Sticker set name
     * @param  string  $old_sticker  File identifier of the replaced sticker
     * @param  InputSticker  $sticker  A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
     *
     * @throws TelegramException
     */
    public function replaceStickerInSet(int $user_id, string $name, string $old_sticker, InputSticker $sticker): bool
    {
        return $this->raw('replaceStickerInSet', func_get_args());
    }

    /**
     * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string  $sticker  File identifier of the sticker
     * @param  string[]  $emoji_list  A JSON-serialized list of 1-20 emoji associated with the sticker
     *
     * @throws TelegramException
     */
    public function setStickerEmojiList(string $sticker, array $emoji_list): bool
    {
        return $this->raw('setStickerEmojiList', func_get_args());
    }

    /**
     * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns <em>True</em> on success.
     *
     * @param  string  $sticker  File identifier of the sticker
     * @param  string[]  $keywords  A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
     *
     * @throws TelegramException
     */
    public function setStickerKeywords(string $sticker, ?array $keywords = null): bool
    {
        return $this->raw('setStickerKeywords', func_get_args());
    }

    /**
     * Use this method to change the <a href="https://core.telegram.org/bots/api#maskposition">mask position</a> of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns <em>True</em> on success.
     *
     * @param  string  $sticker  File identifier of the sticker
     * @param  MaskPosition  $mask_position  A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     *
     * @throws TelegramException
     */
    public function setStickerMaskPosition(string $sticker, ?MaskPosition $mask_position = null): bool
    {
        return $this->raw('setStickerMaskPosition', func_get_args());
    }

    /**
     * Use this method to set the title of a created sticker set. Returns <em>True</em> on success.
     *
     * @param  string  $name  Sticker set name
     * @param  string  $title  Sticker set title, 1-64 characters
     *
     * @throws TelegramException
     */
    public function setStickerSetTitle(string $name, string $title): bool
    {
        return $this->raw('setStickerSetTitle', func_get_args());
    }

    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns <em>True</em> on success.
     *
     * @param  string  $name  Sticker set name
     * @param  int  $user_id  User identifier of the sticker set owner
     * @param  string  $format  Format of the thumbnail, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, or “video” for a WEBM video
     * @param  InputFile|string  $thumbnail  A .WEBP or .PNG image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a .TGS animation with a thumbnail up to 32 kilobytes in size (see <a href="https://core.telegram.org/stickers#animation-requirements"><a href="https://core.telegram.org/stickers#animation-requirements">https://core.telegram.org/stickers#animation-requirements</a></a> for animated sticker technical requirements), or a WEBM video with the thumbnail up to 32 kilobytes in size; see <a href="https://core.telegram.org/stickers#video-requirements"><a href="https://core.telegram.org/stickers#video-requirements">https://core.telegram.org/stickers#video-requirements</a></a> for video sticker technical requirements. Pass a <em>file_id</em> as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>. Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.
     *
     * @throws TelegramException
     */
    public function setStickerSetThumbnail(
        string $name,
        int $user_id,
        string $format,
        InputFile|string|null $thumbnail = null,
    ): bool {
        return $this->raw('setStickerSetThumbnail', func_get_args());
    }

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns <em>True</em> on success.
     *
     * @param  string  $name  Sticker set name
     * @param  string  $custom_emoji_id  Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
     *
     * @throws TelegramException
     */
    public function setCustomEmojiStickerSetThumbnail(string $name, ?string $custom_emoji_id = null): bool
    {
        return $this->raw('setCustomEmojiStickerSetThumbnail', func_get_args());
    }

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns <em>True</em> on success.
     *
     * @param  string  $name  Sticker set name
     *
     * @throws TelegramException
     */
    public function deleteStickerSet(string $name): bool
    {
        return $this->raw('deleteStickerSet', func_get_args());
    }

    /**
     * Sends a gift to the given user. The gift can't be converted to Telegram Stars by the user. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  Unique identifier of the target user that will receive the gift
     * @param  string  $gift_id  Identifier of the gift
     * @param  string  $text  Text that will be shown along with the gift; 0-255 characters
     * @param  string  $text_parse_mode  Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
     * @param  MessageEntity[]  $text_entities  A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of <em>text_parse_mode</em>. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
     *
     * @throws TelegramException
     */
    public function sendGift(
        int $user_id,
        string $gift_id,
        ?string $text = null,
        ?string $text_parse_mode = null,
        ?array $text_entities = null,
    ): bool {
        return $this->raw('sendGift', func_get_args());
    }

    /**
     * Use this method to send answers to an inline query. On success, <em>True</em> is returned.No more than 50 results per query are allowed.
     *
     * @param  string  $inline_query_id  Unique identifier for the answered query
     * @param  InlineQueryResult[]  $results  A JSON-serialized array of results for the inline query
     * @param  int  $cache_time  The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     * @param  bool  $is_personal  Pass <em>True</em> if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     * @param  string  $next_offset  Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     * @param  InlineQueryResultsButton  $button  A JSON-serialized object describing a button to be shown above inline query results
     *
     * @throws TelegramException
     */
    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        ?int $cache_time = null,
        ?bool $is_personal = null,
        ?string $next_offset = null,
        ?InlineQueryResultsButton $button = null,
    ): bool {
        return $this->raw('answerInlineQuery', func_get_args());
    }

    /**
     * Use this method to set the result of an interaction with a <a href="https://core.telegram.org/bots/webapps">Web App</a> and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a <a href="https://core.telegram.org/bots/api#sentwebappmessage">SentWebAppMessage</a> object is returned.
     *
     * @param  string  $web_app_query_id  Unique identifier for the query to be answered
     * @param  InlineQueryResult  $result  A JSON-serialized object describing the message to be sent
     *
     * @throws TelegramException
     */
    public function answerWebAppQuery(string $web_app_query_id, InlineQueryResult $result): SentWebAppMessage
    {
        return $this->raw('answerWebAppQuery', func_get_args());
    }

    /**
     * Stores a message that can be sent by a user of a Mini App. Returns a <a href="https://core.telegram.org/bots/api#preparedinlinemessage">PreparedInlineMessage</a> object.
     *
     * @param  int  $user_id  Unique identifier of the target user that can use the prepared message
     * @param  InlineQueryResult  $result  A JSON-serialized object describing the message to be sent
     * @param  bool  $allow_user_chats  Pass <em>True</em> if the message can be sent to private chats with users
     * @param  bool  $allow_bot_chats  Pass <em>True</em> if the message can be sent to private chats with bots
     * @param  bool  $allow_group_chats  Pass <em>True</em> if the message can be sent to group and supergroup chats
     * @param  bool  $allow_channel_chats  Pass <em>True</em> if the message can be sent to channel chats
     *
     * @throws TelegramException
     */
    public function savePreparedInlineMessage(
        int $user_id,
        InlineQueryResult $result,
        ?bool $allow_user_chats = null,
        ?bool $allow_bot_chats = null,
        ?bool $allow_group_chats = null,
        ?bool $allow_channel_chats = null,
    ): PreparedInlineMessage {
        return $this->raw('savePreparedInlineMessage', func_get_args());
    }

    /**
     * Use this method to send invoices. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string  $chat_id  Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param  string  $title  Product name, 1-32 characters
     * @param  string  $description  Product description, 1-255 characters
     * @param  string  $payload  Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param  string  $currency  Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  LabeledPrice[]  $prices  Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  string  $provider_token  Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int  $max_tip_amount  The maximum accepted amount for tips in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int[]  $suggested_tip_amounts  A JSON-serialized array of suggested amounts of tips in the <em>smallest units</em> of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed <em>max_tip_amount</em>.
     * @param  string  $start_parameter  Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a <em>Pay</em> button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a <em>URL</em> button with a deep link to the bot (instead of a <em>Pay</em> button), with the value used as the start parameter
     * @param  string  $provider_data  JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @param  string  $photo_url  URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     * @param  int  $photo_size  Photo size in bytes
     * @param  int  $photo_width  Photo width
     * @param  int  $photo_height  Photo height
     * @param  bool  $need_name  Pass <em>True</em> if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_phone_number  Pass <em>True</em> if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_email  Pass <em>True</em> if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_shipping_address  Pass <em>True</em> if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_phone_number_to_provider  Pass <em>True</em> if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_email_to_provider  Pass <em>True</em> if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $is_flexible  Pass <em>True</em> if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
     *
     * @throws TelegramException
     */
    public function sendInvoice(
        int|string $chat_id,
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?int $message_thread_id = null,
        ?string $provider_token = null,
        ?int $max_tip_amount = null,
        ?array $suggested_tip_amounts = null,
        ?string $start_parameter = null,
        ?string $provider_data = null,
        ?string $photo_url = null,
        ?int $photo_size = null,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?bool $need_name = null,
        ?bool $need_phone_number = null,
        ?bool $need_email = null,
        ?bool $need_shipping_address = null,
        ?bool $send_phone_number_to_provider = null,
        ?bool $send_email_to_provider = null,
        ?bool $is_flexible = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message {
        return $this->raw('sendInvoice', func_get_args());
    }

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as <em>String</em> on success.
     *
     * @param  string  $title  Product name, 1-32 characters
     * @param  string  $description  Product description, 1-255 characters
     * @param  string  $payload  Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param  string  $currency  Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  LabeledPrice[]  $prices  Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the link will be created. For payments in <a href="https://t.me/BotNews/90">Telegram Stars</a> only.
     * @param  string  $provider_token  Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int  $subscription_period  The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user.
     * @param  int  $max_tip_amount  The maximum accepted amount for tips in the <em>smallest units</em> of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the <em>exp</em> parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  int[]  $suggested_tip_amounts  A JSON-serialized array of suggested amounts of tips in the <em>smallest units</em> of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed <em>max_tip_amount</em>.
     * @param  string  $provider_data  JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @param  string  $photo_url  URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param  int  $photo_size  Photo size in bytes
     * @param  int  $photo_width  Photo width
     * @param  int  $photo_height  Photo height
     * @param  bool  $need_name  Pass <em>True</em> if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_phone_number  Pass <em>True</em> if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_email  Pass <em>True</em> if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $need_shipping_address  Pass <em>True</em> if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_phone_number_to_provider  Pass <em>True</em> if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $send_email_to_provider  Pass <em>True</em> if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     * @param  bool  $is_flexible  Pass <em>True</em> if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.
     *
     * @throws TelegramException
     */
    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?string $business_connection_id = null,
        ?string $provider_token = null,
        ?int $subscription_period = null,
        ?int $max_tip_amount = null,
        ?array $suggested_tip_amounts = null,
        ?string $provider_data = null,
        ?string $photo_url = null,
        ?int $photo_size = null,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?bool $need_name = null,
        ?bool $need_phone_number = null,
        ?bool $need_email = null,
        ?bool $need_shipping_address = null,
        ?bool $send_phone_number_to_provider = null,
        ?bool $send_email_to_provider = null,
        ?bool $is_flexible = null,
    ): string {
        return $this->raw('createInvoiceLink', func_get_args());
    }

    /**
     * If you sent an invoice requesting a shipping address and the parameter <em>is_flexible</em> was specified, the Bot API will send an <a href="https://core.telegram.org/bots/api#update">Update</a> with a <em>shipping_query</em> field to the bot. Use this method to reply to shipping queries. On success, <em>True</em> is returned.
     *
     * @param  string  $shipping_query_id  Unique identifier for the query to be answered
     * @param  bool  $ok  Pass <em>True</em> if delivery to the specified address is possible and <em>False</em> if there are any problems (for example, if delivery to the specified address is not possible)
     * @param  ShippingOption[]  $shipping_options  Required if <em>ok</em> is <em>True</em>. A JSON-serialized array of available shipping options.
     * @param  string  $error_message  Required if <em>ok</em> is <em>False</em>. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     *
     * @throws TelegramException
     */
    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        ?array $shipping_options = null,
        ?string $error_message = null,
    ): bool {
        return $this->raw('answerShippingQuery', func_get_args());
    }

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an <a href="https://core.telegram.org/bots/api#update">Update</a> with the field <em>pre_checkout_query</em>. Use this method to respond to such pre-checkout queries. On success, <em>True</em> is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     *
     * @param  string  $pre_checkout_query_id  Unique identifier for the query to be answered
     * @param  bool  $ok  Specify <em>True</em> if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use <em>False</em> if there are any problems.
     * @param  string  $error_message  Required if <em>ok</em> is <em>False</em>. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     *
     * @throws TelegramException
     */
    public function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        ?string $error_message = null,
    ): bool {
        return $this->raw('answerPreCheckoutQuery', func_get_args());
    }

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a <a href="https://core.telegram.org/bots/api#startransactions">StarTransactions</a> object.
     *
     * @param  int  $offset  Number of transactions to skip in the response
     * @param  int  $limit  The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @throws TelegramException
     */
    public function getStarTransactions(?int $offset = null, ?int $limit = null): StarTransactions
    {
        return $this->raw('getStarTransactions', func_get_args());
    }

    /**
     * Refunds a successful payment in <a href="https://t.me/BotNews/90">Telegram Stars</a>. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  Identifier of the user whose payment will be refunded
     * @param  string  $telegram_payment_charge_id  Telegram payment identifier
     *
     * @throws TelegramException
     */
    public function refundStarPayment(int $user_id, string $telegram_payment_charge_id): bool
    {
        return $this->raw('refundStarPayment', func_get_args());
    }

    /**
     * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns <em>True</em> on success.
     *
     * @param  int  $user_id  Identifier of the user whose subscription will be edited
     * @param  string  $telegram_payment_charge_id  Telegram payment identifier for the subscription
     * @param  bool  $is_canceled  Pass <em>True</em> to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass <em>False</em> to allow the user to re-enable a subscription that was previously canceled by the bot.
     *
     * @throws TelegramException
     */
    public function editUserStarSubscription(
        int $user_id,
        string $telegram_payment_charge_id,
        bool $is_canceled,
    ): bool {
        return $this->raw('editUserStarSubscription', func_get_args());
    }

    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns <em>True</em> on success.
     *
     * @param  int  $user_id  User identifier
     * @param  PassportElementError[]  $errors  A JSON-serialized array describing the errors
     *
     * @throws TelegramException
     */
    public function setPassportDataErrors(int $user_id, array $errors): bool
    {
        return $this->raw('setPassportDataErrors', func_get_args());
    }

    /**
     * Use this method to send a game. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int  $chat_id  Unique identifier for the target chat
     * @param  string  $game_short_name  Short name of the game, serves as the unique identifier for the game. Set up your games via <a href="https://t.me/botfather">@BotFather</a>.
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup  $reply_markup  A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
     *
     * @throws TelegramException
     */
    public function sendGame(
        int $chat_id,
        string $game_short_name,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message {
        return $this->raw('sendGame', func_get_args());
    }

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is returned. Returns an error, if the new score is not greater than the user's current score in the chat and <em>force</em> is <em>False</em>.
     *
     * @param  int  $user_id  User identifier
     * @param  int  $score  New score, must be non-negative
     * @param  bool  $force  Pass <em>True</em> if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @param  bool  $disable_edit_message  Pass <em>True</em> if the game message should not be automatically edited to include the current scoreboard
     * @param  int  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the sent message
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     *
     * @throws TelegramException
     */
    public function setGameScore(
        int $user_id,
        int $score,
        ?bool $force = null,
        ?bool $disable_edit_message = null,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ): Message|bool {
        return $this->raw('setGameScore', func_get_args());
    }

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of <a href="https://core.telegram.org/bots/api#gamehighscore">GameHighScore</a> objects.
     *
     * @param  int  $user_id  Target user id
     * @param  int  $chat_id  Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat
     * @param  int  $message_id  Required if <em>inline_message_id</em> is not specified. Identifier of the sent message
     * @param  string  $inline_message_id  Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message
     * @return GameHighScore[]
     *
     * @throws TelegramException
     */
    public function getGameHighScores(
        int $user_id,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ): array {
        return $this->raw('getGameHighScores', func_get_args());
    }
}

<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Layers;

use Telepath\Telegram\BotCommand;
use Telepath\Telegram\BotCommandScope;
use Telepath\Telegram\ChatAdministratorRights;
use Telepath\Telegram\ChatPermissions;
use Telepath\Telegram\ForceReply;
use Telepath\Telegram\InlineKeyboardMarkup;
use Telepath\Telegram\InlineQueryResult;
use Telepath\Telegram\InputMedia;
use Telepath\Telegram\InputMediaAudio;
use Telepath\Telegram\InputMediaDocument;
use Telepath\Telegram\InputMediaPhoto;
use Telepath\Telegram\InputMediaVideo;
use Telepath\Telegram\LabeledPrice;
use Telepath\Telegram\MaskPosition;
use Telepath\Telegram\MenuButton;
use Telepath\Telegram\MessageEntity;
use Telepath\Telegram\PassportElementError;
use Telepath\Telegram\ReplyKeyboardMarkup;
use Telepath\Telegram\ReplyKeyboardRemove;
use Telepath\Telegram\ShippingOption;
use Telepath\Types\InputFile;

abstract class Generated extends Base
{
    /**
     * Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update objects.
     *
     * @param int $offset Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id. The negative offset can be specified to retrieve updates starting from -offset update from the end of the updates queue. All previous updates will forgotten.
     * @param int $limit Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @param int $timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     * @param string[] $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all update types except chat_member (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     * @return \Telepath\Telegram\Update[]
     * @throws \Telepath\Exceptions\TelegramException
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
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns True on success.
     *
     * @param string $url HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @param InputFile $certificate Upload your public key certificate so that the root certificate in use can be checked. See our self-signed guide for details.
     * @param string $ip_address The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @param int $max_connections The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @param string[] $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all update types except chat_member (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     * @param bool $drop_pending_updates Pass True to drop all pending updates
     * @param string $secret_token A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     * @throws \Telepath\Exceptions\TelegramException
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
     * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
     *
     * @param bool $drop_pending_updates Pass True to drop all pending updates
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteWebhook(?bool $drop_pending_updates = null): bool
    {
        return $this->raw('deleteWebhook', func_get_args());
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
     *
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getWebhookInfo(): \Telepath\Telegram\WebhookInfo
    {
        return $this->raw('getWebhookInfo', func_get_args());
    }

    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
     *
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getMe(): \Telepath\Telegram\User
    {
        return $this->raw('getMe', func_get_args());
    }

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns True on success. Requires no parameters.
     *
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function logOut(): bool
    {
        return $this->raw('logOut', func_get_args());
    }

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns True on success. Requires no parameters.
     *
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function close(): bool
    {
        return $this->raw('close', func_get_args());
    }

    /**
     * Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
     * @param MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     * @param bool $disable_web_page_preview Disables link previews for links in this message
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendMessage(
        int|string $chat_id,
        string $text,
        ?int $message_thread_id = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendMessage', func_get_args());
    }

    /**
     * Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param int $message_id Message identifier in the chat specified in from_chat_id
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the forwarded message from forwarding and saving
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function forwardMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('forwardMessage', func_get_args());
    }

    /**
     * Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param int $message_id Message identifier in the chat specified in from_chat_id
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $caption New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @param string $parse_mode Mode for parsing entities in the new caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of parse_mode
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function copyMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\MessageId {
        return $this->raw('copyMessage', func_get_args());
    }

    /**
     * Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $photo Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $caption Photo caption (may also be used when resending photos by file_id), 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool $has_spoiler Pass True if the photo needs to be covered with a spoiler animation
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendPhoto(
        int|string $chat_id,
        InputFile|string $photo,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendPhoto', func_get_args());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $audio Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $caption Audio caption, 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int $duration Duration of the audio in seconds
     * @param string $performer Performer
     * @param string $title Track name
     * @param InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendAudio(
        int|string $chat_id,
        InputFile|string $audio,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        InputFile|string|null $thumb = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendAudio', func_get_args());
    }

    /**
     * Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $document File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $caption Document caption (may also be used when resending documents by file_id), 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the document caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool $disable_content_type_detection Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendDocument(
        int|string $chat_id,
        InputFile|string $document,
        ?int $message_thread_id = null,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_content_type_detection = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendDocument', func_get_args());
    }

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $video Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int $duration Duration of sent video in seconds
     * @param int $width Video width
     * @param int $height Video height
     * @param InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $caption Video caption (may also be used when resending videos by file_id), 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the video caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool $has_spoiler Pass True if the video needs to be covered with a spoiler animation
     * @param bool $supports_streaming Pass True if the uploaded video is suitable for streaming
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendVideo(
        int|string $chat_id,
        InputFile|string $video,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $supports_streaming = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendVideo', func_get_args());
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $animation Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int $duration Duration of sent animation in seconds
     * @param int $width Animation width
     * @param int $height Animation height
     * @param InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $caption Animation caption (may also be used when resending animation by file_id), 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the animation caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool $has_spoiler Pass True if the animation needs to be covered with a spoiler animation
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendAnimation(
        int|string $chat_id,
        InputFile|string $animation,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendAnimation', func_get_args());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS (other formats may be sent as Audio or Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $voice Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $caption Voice message caption, 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int $duration Duration of the voice message in seconds
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendVoice(
        int|string $chat_id,
        InputFile|string $voice,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendVoice', func_get_args());
    }

    /**
     * As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $video_note Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. More information on Sending Files ». Sending video notes by a URL is currently unsupported
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int $duration Duration of sent video in seconds
     * @param int $length Video width and height, i.e. diameter of the video message
     * @param InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendVideoNote(
        int|string $chat_id,
        InputFile|string $video_note,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $length = null,
        InputFile|string|null $thumb = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendVideoNote', func_get_args());
    }

    /**
     * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputMediaAudio[]|InputMediaDocument[]|InputMediaPhoto[]|InputMediaVideo[] $media A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent messages from forwarding and saving
     * @param int $reply_to_message_id If the messages are a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @return \Telepath\Telegram\Message[]
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendMediaGroup(
        int|string $chat_id,
        array $media,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
    ): array {
        return $this->raw('sendMediaGroup', func_get_args());
    }

    /**
     * Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param float $latitude Latitude of the location
     * @param float $longitude Longitude of the location
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param float $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int $live_period Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400.
     * @param int $heading For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int $proximity_alert_radius For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendLocation(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        ?int $message_thread_id = null,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendLocation', func_get_args());
    }

    /**
     * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param float $latitude Latitude of new location
     * @param float $longitude Longitude of new location
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param float $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int $heading Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int $proximity_alert_radius The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?float $horizontal_accuracy = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('editMessageLiveLocation', func_get_args());
    }

    /**
     * Use this method to stop updating a live location message before live_period expires. On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message with live location to stop
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function stopMessageLiveLocation(
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('stopMessageLiveLocation', func_get_args());
    }

    /**
     * Use this method to send information about a venue. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of the venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $foursquare_id Foursquare identifier of the venue
     * @param string $foursquare_type Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string $google_place_id Google Places identifier of the venue
     * @param string $google_place_type Google Places type of the venue. (See supported types.)
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendVenue(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?int $message_thread_id = null,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendVenue', func_get_args());
    }

    /**
     * Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $last_name Contact's last name
     * @param string $vcard Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendContact(
        int|string $chat_id,
        string $phone_number,
        string $first_name,
        ?int $message_thread_id = null,
        ?string $last_name = null,
        ?string $vcard = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendContact', func_get_args());
    }

    /**
     * Use this method to send a native poll. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $question Poll question, 1-300 characters
     * @param string[] $options A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param bool $is_anonymous True, if the poll needs to be anonymous, defaults to True
     * @param string $type Poll type, “quiz” or “regular”, defaults to “regular”
     * @param bool $allows_multiple_answers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
     * @param int $correct_option_id 0-based identifier of the correct answer option, required for polls in quiz mode
     * @param string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @param string $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
     * @param MessageEntity[] $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of parse_mode
     * @param int $open_period Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
     * @param int $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
     * @param bool $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendPoll(
        int|string $chat_id,
        string $question,
        array $options,
        ?int $message_thread_id = null,
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
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendPoll', func_get_args());
    }

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $emoji Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendDice(
        int|string $chat_id,
        ?int $message_thread_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendDice', func_get_args());
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $action Type of action to broadcast. Choose one, depending on what the user is about to receive: typing for text messages, upload_photo for photos, record_video or upload_video for videos, record_voice or upload_voice for voice notes, upload_document for general files, choose_sticker for stickers, find_location for location data, record_video_note or upload_video_note for video notes.
     * @param int $message_thread_id Unique identifier for the target message thread; supergroups only
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendChatAction(int|string $chat_id, string $action, ?int $message_thread_id = null): bool
    {
        return $this->raw('sendChatAction', func_get_args());
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     *
     * @param int $user_id Unique identifier of the target user
     * @param int $offset Sequential number of the first photo to be returned. By default, all photos are returned.
     * @param int $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getUserProfilePhotos(
        int $user_id,
        ?int $offset = null,
        ?int $limit = null,
    ): \Telepath\Telegram\UserProfilePhotos {
        return $this->raw('getUserProfilePhotos', func_get_args());
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
     *
     * @param string $file_id File identifier to get information about
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getFile(string $file_id): \Telepath\Telegram\File
    {
        return $this->raw('getFile', func_get_args());
    }

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param int $until_date Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @param bool $revoke_messages Pass True to delete all messages from the chat for the user that is being removed. If False, the user will be able to see messages in the group that were sent before the user was removed. Always True for supergroups and channels.
     * @throws \Telepath\Exceptions\TelegramException
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
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param bool $only_if_banned Do nothing if the user is not banned
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unbanChatMember(int|string $chat_id, int $user_id, ?bool $only_if_banned = null): bool
    {
        return $this->raw('unbanChatMember', func_get_args());
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @param ChatPermissions $permissions A JSON-serialized object for new user permissions
     * @param bool $use_independent_chat_permissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @param int $until_date Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     * @throws \Telepath\Exceptions\TelegramException
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
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param bool $is_anonymous Pass True if the administrator's presence in the chat is hidden
     * @param bool $can_manage_chat Pass True if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     * @param bool $can_post_messages Pass True if the administrator can create channel posts, channels only
     * @param bool $can_edit_messages Pass True if the administrator can edit messages of other users and can pin messages, channels only
     * @param bool $can_delete_messages Pass True if the administrator can delete messages of other users
     * @param bool $can_manage_video_chats Pass True if the administrator can manage video chats
     * @param bool $can_restrict_members Pass True if the administrator can restrict, ban or unban chat members
     * @param bool $can_promote_members Pass True if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @param bool $can_change_info Pass True if the administrator can change chat title, photo and other settings
     * @param bool $can_invite_users Pass True if the administrator can invite new users to the chat
     * @param bool $can_pin_messages Pass True if the administrator can pin messages, supergroups only
     * @param bool $can_manage_topics Pass True if the user is allowed to create, rename, close, and reopen forum topics, supergroups only
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function promoteChatMember(
        int|string $chat_id,
        int $user_id,
        ?bool $is_anonymous = null,
        ?bool $can_manage_chat = null,
        ?bool $can_post_messages = null,
        ?bool $can_edit_messages = null,
        ?bool $can_delete_messages = null,
        ?bool $can_manage_video_chats = null,
        ?bool $can_restrict_members = null,
        ?bool $can_promote_members = null,
        ?bool $can_change_info = null,
        ?bool $can_invite_users = null,
        ?bool $can_pin_messages = null,
        ?bool $can_manage_topics = null,
    ): bool {
        return $this->raw('promoteChatMember', func_get_args());
    }

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @param string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatAdministratorCustomTitle(int|string $chat_id, int $user_id, string $custom_title): bool
    {
        return $this->raw('setChatAdministratorCustomTitle', func_get_args());
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $sender_chat_id Unique identifier of the target sender chat
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function banChatSenderChat(int|string $chat_id, int $sender_chat_id): bool
    {
        return $this->raw('banChatSenderChat', func_get_args());
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $sender_chat_id Unique identifier of the target sender chat
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unbanChatSenderChat(int|string $chat_id, int $sender_chat_id): bool
    {
        return $this->raw('unbanChatSenderChat', func_get_args());
    }

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param ChatPermissions $permissions A JSON-serialized object for new default chat permissions
     * @param bool $use_independent_chat_permissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatPermissions(
        int|string $chat_id,
        ChatPermissions $permissions,
        ?bool $use_independent_chat_permissions = null,
    ): bool {
        return $this->raw('setChatPermissions', func_get_args());
    }

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function exportChatInviteLink(int|string $chat_id): string
    {
        return $this->raw('exportChatInviteLink', func_get_args());
    }

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $name Invite link name; 0-32 characters
     * @param int $expire_date Point in time (Unix timestamp) when the link will expire
     * @param int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function createChatInviteLink(
        int|string $chat_id,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): \Telepath\Telegram\ChatInviteLink {
        return $this->raw('createChatInviteLink', func_get_args());
    }

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $invite_link The invite link to edit
     * @param string $name Invite link name; 0-32 characters
     * @param int $expire_date Point in time (Unix timestamp) when the link will expire
     * @param int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editChatInviteLink(
        int|string $chat_id,
        string $invite_link,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): \Telepath\Telegram\ChatInviteLink {
        return $this->raw('editChatInviteLink', func_get_args());
    }

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format @channelusername)
     * @param string $invite_link The invite link to revoke
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function revokeChatInviteLink(int|string $chat_id, string $invite_link): \Telepath\Telegram\ChatInviteLink
    {
        return $this->raw('revokeChatInviteLink', func_get_args());
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function approveChatJoinRequest(int|string $chat_id, int $user_id): bool
    {
        return $this->raw('approveChatJoinRequest', func_get_args());
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function declineChatJoinRequest(int|string $chat_id, int $user_id): bool
    {
        return $this->raw('declineChatJoinRequest', func_get_args());
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile $photo New chat photo, uploaded using multipart/form-data
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatPhoto(int|string $chat_id, InputFile $photo): bool
    {
        return $this->raw('setChatPhoto', func_get_args());
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteChatPhoto(int|string $chat_id): bool
    {
        return $this->raw('deleteChatPhoto', func_get_args());
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $title New chat title, 1-128 characters
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatTitle(int|string $chat_id, string $title): bool
    {
        return $this->raw('setChatTitle', func_get_args());
    }

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $description New chat description, 0-255 characters
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatDescription(int|string $chat_id, ?string $description = null): bool
    {
        return $this->raw('setChatDescription', func_get_args());
    }

    /**
     * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Identifier of a message to pin
     * @param bool $disable_notification Pass True if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function pinChatMessage(int|string $chat_id, int $message_id, ?bool $disable_notification = null): bool
    {
        return $this->raw('pinChatMessage', func_get_args());
    }

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unpinChatMessage(int|string $chat_id, ?int $message_id = null): bool
    {
        return $this->raw('unpinChatMessage', func_get_args());
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unpinAllChatMessages(int|string $chat_id): bool
    {
        return $this->raw('unpinAllChatMessages', func_get_args());
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function leaveChat(int|string $chat_id): bool
    {
        return $this->raw('leaveChat', func_get_args());
    }

    /**
     * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getChat(int|string $chat_id): \Telepath\Telegram\Chat
    {
        return $this->raw('getChat', func_get_args());
    }

    /**
     * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @return \Telepath\Telegram\ChatMember[]
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getChatAdministrators(int|string $chat_id): array
    {
        return $this->raw('getChatAdministrators', func_get_args());
    }

    /**
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getChatMemberCount(int|string $chat_id): int
    {
        return $this->raw('getChatMemberCount', func_get_args());
    }

    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getChatMember(int|string $chat_id, int $user_id): \Telepath\Telegram\ChatMember
    {
        return $this->raw('getChatMember', func_get_args());
    }

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param string $sticker_set_name Name of the sticker set to be set as the group sticker set
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatStickerSet(int|string $chat_id, string $sticker_set_name): bool
    {
        return $this->raw('setChatStickerSet', func_get_args());
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteChatStickerSet(int|string $chat_id): bool
    {
        return $this->raw('deleteChatStickerSet', func_get_args());
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
     *
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getForumTopicIconStickers()
    {
        return $this->raw('getForumTopicIconStickers', func_get_args());
    }

    /**
     * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns information about the created topic as a ForumTopic object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param string $name Topic name, 1-128 characters
     * @param int $icon_color Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @param string $icon_custom_emoji_id Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function createForumTopic(
        int|string $chat_id,
        string $name,
        ?int $icon_color = null,
        ?string $icon_custom_emoji_id = null,
    ) {
        return $this->raw('createForumTopic', func_get_args());
    }

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @param string $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
     * @param string $icon_custom_emoji_id New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editForumTopic(
        int|string $chat_id,
        int $message_thread_id,
        ?string $name = null,
        ?string $icon_custom_emoji_id = null,
    ) {
        return $this->raw('editForumTopic', func_get_args());
    }

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function closeForumTopic(int|string $chat_id, int $message_thread_id)
    {
        return $this->raw('closeForumTopic', func_get_args());
    }

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function reopenForumTopic(int|string $chat_id, int $message_thread_id)
    {
        return $this->raw('reopenForumTopic', func_get_args());
    }

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteForumTopic(int|string $chat_id, int $message_thread_id)
    {
        return $this->raw('deleteForumTopic', func_get_args());
    }

    /**
     * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unpinAllForumTopicMessages(int|string $chat_id, int $message_thread_id)
    {
        return $this->raw('unpinAllForumTopicMessages', func_get_args());
    }

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param string $name New topic name, 1-128 characters
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editGeneralForumTopic(int|string $chat_id, string $name)
    {
        return $this->raw('editGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function closeGeneralForumTopic(int|string $chat_id)
    {
        return $this->raw('closeGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically unhidden if it was hidden. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function reopenGeneralForumTopic(int|string $chat_id)
    {
        return $this->raw('reopenGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically closed if it was open. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function hideGeneralForumTopic(int|string $chat_id)
    {
        return $this->raw('hideGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function unhideGeneralForumTopic(int|string $chat_id)
    {
        return $this->raw('unhideGeneralForumTopic', func_get_args());
    }

    /**
     * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
     *
     * @param string $callback_query_id Unique identifier for the query to be answered
     * @param string $text Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * @param bool $show_alert If True, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
     * @param string $url URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @BotFather, specify the URL that opens your game - note that this will only work if the query comes from a callback_game button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     * @param int $cache_time The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * @throws \Telepath\Exceptions\TelegramException
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
     * Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
     *
     * @param BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     * @param BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
     * @param string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setMyCommands(array $commands, ?BotCommandScope $scope = null, ?string $language_code = null): bool
    {
        return $this->raw('setMyCommands', func_get_args());
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
     *
     * @param BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
     * @param string $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): bool
    {
        return $this->raw('deleteMyCommands', func_get_args());
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
     *
     * @param BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
     * @param string $language_code A two-letter ISO 639-1 language code or an empty string
     * @return BotCommand[]
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): array
    {
        return $this->raw('getMyCommands', func_get_args());
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
     *
     * @param int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @param MenuButton $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setChatMenuButton(?int $chat_id = null, ?MenuButton $menu_button = null): bool
    {
        return $this->raw('setChatMenuButton', func_get_args());
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
     *
     * @param int $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getChatMenuButton(?int $chat_id = null): MenuButton
    {
        return $this->raw('getChatMenuButton', func_get_args());
    }

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are are free to modify the list before adding the bot. Returns True on success.
     *
     * @param ChatAdministratorRights $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @param bool $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setMyDefaultAdministratorRights(
        ?ChatAdministratorRights $rights = null,
        ?bool $for_channels = null,
    ): bool {
        return $this->raw('setMyDefaultAdministratorRights', func_get_args());
    }

    /**
     * Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
     *
     * @param bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getMyDefaultAdministratorRights(?bool $for_channels = null): ChatAdministratorRights
    {
        return $this->raw('getMyDefaultAdministratorRights', func_get_args());
    }

    /**
     * Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param string $text New text of the message, 1-4096 characters after entities parsing
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
     * @param MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     * @param bool $disable_web_page_preview Disables link previews for links in this message
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editMessageText(
        string $text,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('editMessageText', func_get_args());
    }

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param string $caption New caption of the message, 0-1024 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the message caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editMessageCaption(
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('editMessageCaption', func_get_args());
    }

    /**
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param InputMedia $media A JSON-serialized object for a new media content of the message
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editMessageMedia(
        InputMedia $media,
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('editMessageMedia', func_get_args());
    }

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function editMessageReplyMarkup(
        int|string|null $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('editMessageReplyMarkup', func_get_args());
    }

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Identifier of the original message with the poll
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new message inline keyboard.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function stopPoll(
        int|string $chat_id,
        int $message_id,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Poll {
        return $this->raw('stopPoll', func_get_args());
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted can_post_messages permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $message_id Identifier of the message to delete
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteMessage(int|string $chat_id, int $message_id): bool
    {
        return $this->raw('deleteMessage', func_get_args());
    }

    /**
     * Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile|string $sticker Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendSticker(
        int|string $chat_id,
        InputFile|string $sticker,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendSticker', func_get_args());
    }

    /**
     * Use this method to get a sticker set. On success, a StickerSet object is returned.
     *
     * @param string $name Name of the sticker set
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getStickerSet(string $name): \Telepath\Telegram\StickerSet
    {
        return $this->raw('getStickerSet', func_get_args());
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
     *
     * @param string[] $custom_emoji_ids List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids)
    {
        return $this->raw('getCustomEmojiStickers', func_get_args());
    }

    /**
     * Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
     *
     * @param int $user_id User identifier of sticker file owner
     * @param InputFile $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. More information on Sending Files »
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function uploadStickerFile(int $user_id, InputFile $png_sticker): \Telepath\Telegram\File
    {
        return $this->raw('uploadStickerFile', func_get_args());
    }

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Returns True on success.
     *
     * @param int $user_id User identifier of created sticker set owner
     * @param string $name Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
     * @param string $title Sticker set title, 1-64 characters
     * @param string $emojis One or more emoji corresponding to the sticker
     * @param InputFile|string $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param InputFile $tgs_sticker TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
     * @param InputFile $webm_sticker WEBM video with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
     * @param string $sticker_type Type of stickers in the set, pass “regular” or “mask”. Custom emoji sticker sets can't be created via the Bot API at the moment. By default, a regular sticker set is created.
     * @param MaskPosition $mask_position A JSON-serialized object for position where the mask should be placed on faces
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        string $emojis,
        InputFile|string|null $png_sticker = null,
        ?InputFile $tgs_sticker = null,
        ?InputFile $webm_sticker = null,
        ?string $sticker_type = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->raw('createNewStickerSet', func_get_args());
    }

    /**
     * Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
     *
     * @param int $user_id User identifier of sticker set owner
     * @param string $name Sticker set name
     * @param string $emojis One or more emoji corresponding to the sticker
     * @param InputFile|string $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param InputFile $tgs_sticker TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
     * @param InputFile $webm_sticker WEBM video with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
     * @param MaskPosition $mask_position A JSON-serialized object for position where the mask should be placed on faces
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function addStickerToSet(
        int $user_id,
        string $name,
        string $emojis,
        InputFile|string|null $png_sticker = null,
        ?InputFile $tgs_sticker = null,
        ?InputFile $webm_sticker = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->raw('addStickerToSet', func_get_args());
    }

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @param int $position New sticker position in the set, zero-based
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setStickerPositionInSet(string $sticker, int $position): bool
    {
        return $this->raw('setStickerPositionInSet', func_get_args());
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function deleteStickerFromSet(string $sticker): bool
    {
        return $this->raw('deleteStickerFromSet', func_get_args());
    }

    /**
     * Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Video thumbnails can be set only for video sticker sets only. Returns True on success.
     *
     * @param string $name Sticker set name
     * @param int $user_id User identifier of the sticker set owner
     * @param InputFile|string $thumb A PNG image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or a TGS animation with the thumbnail up to 32 kilobytes in size; see https://core.telegram.org/stickers#animated-sticker-requirements for animated sticker technical requirements, or a WEBM video with the thumbnail up to 32 kilobytes in size; see https://core.telegram.org/stickers#video-sticker-requirements for video sticker technical requirements. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files ». Animated sticker set thumbnails can't be uploaded via HTTP URL.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setStickerSetThumb(string $name, int $user_id, InputFile|string|null $thumb = null): bool
    {
        return $this->raw('setStickerSetThumb', func_get_args());
    }

    /**
     * Use this method to send answers to an inline query. On success, True is returned.No more than 50 results per query are allowed.
     *
     * @param string $inline_query_id Unique identifier for the answered query
     * @param InlineQueryResult[] $results A JSON-serialized array of results for the inline query
     * @param int $cache_time The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     * @param bool $is_personal Pass True if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query
     * @param string $next_offset Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     * @param string $switch_pm_text If passed, clients will display a button with specified text that switches the user to a private chat with the bot and sends the bot a start message with the parameter switch_pm_parameter
     * @param string $switch_pm_parameter Deep-linking parameter for the /start message sent to the bot when user presses the switch button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.Example: An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a switch_inline button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        ?int $cache_time = null,
        ?bool $is_personal = null,
        ?string $next_offset = null,
        ?string $switch_pm_text = null,
        ?string $switch_pm_parameter = null,
    ): bool {
        return $this->raw('answerInlineQuery', func_get_args());
    }

    /**
     * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
     *
     * @param string $web_app_query_id Unique identifier for the query to be answered
     * @param InlineQueryResult $result A JSON-serialized object describing the message to be sent
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function answerWebAppQuery(
        string $web_app_query_id,
        InlineQueryResult $result,
    ): \Telepath\Telegram\SentWebAppMessage {
        return $this->raw('answerWebAppQuery', func_get_args());
    }

    /**
     * Use this method to send invoices. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @param string $provider_token Payment provider token, obtained via @BotFather
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies
     * @param LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @param int[] $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string $start_parameter Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter
     * @param string $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @param string $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     * @param int $photo_size Photo size in bytes
     * @param int $photo_width Photo width
     * @param int $photo_height Photo height
     * @param bool $need_name Pass True if you require the user's full name to complete the order
     * @param bool $need_phone_number Pass True if you require the user's phone number to complete the order
     * @param bool $need_email Pass True if you require the user's email address to complete the order
     * @param bool $need_shipping_address Pass True if you require the user's shipping address to complete the order
     * @param bool $send_phone_number_to_provider Pass True if the user's phone number should be sent to provider
     * @param bool $send_email_to_provider Pass True if the user's email address should be sent to provider
     * @param bool $is_flexible Pass True if the final price depends on the shipping method
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendInvoice(
        int|string $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        ?int $message_thread_id = null,
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
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendInvoice', func_get_args());
    }

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as String on success.
     *
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @param string $provider_token Payment provider token, obtained via BotFather
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies
     * @param LabeledPrice[] $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @param int $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @param int[] $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @param string $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @param int $photo_size Photo size in bytes
     * @param int $photo_width Photo width
     * @param int $photo_height Photo height
     * @param bool $need_name Pass True if you require the user's full name to complete the order
     * @param bool $need_phone_number Pass True if you require the user's phone number to complete the order
     * @param bool $need_email Pass True if you require the user's email address to complete the order
     * @param bool $need_shipping_address Pass True if you require the user's shipping address to complete the order
     * @param bool $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider
     * @param bool $send_email_to_provider Pass True if the user's email address should be sent to the provider
     * @param bool $is_flexible Pass True if the final price depends on the shipping method
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
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
    ) {
        return $this->raw('createInvoiceLink', func_get_args());
    }

    /**
     * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
     *
     * @param string $shipping_query_id Unique identifier for the query to be answered
     * @param bool $ok Pass True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     * @param ShippingOption[] $shipping_options Required if ok is True. A JSON-serialized array of available shipping options.
     * @param string $error_message Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     * @throws \Telepath\Exceptions\TelegramException
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
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     *
     * @param string $pre_checkout_query_id Unique identifier for the query to be answered
     * @param bool $ok Specify True if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use False if there are any problems.
     * @param string $error_message Required if ok is False. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function answerPreCheckoutQuery(string $pre_checkout_query_id, bool $ok, ?string $error_message = null): bool
    {
        return $this->raw('answerPreCheckoutQuery', func_get_args());
    }

    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns True on success.
     *
     * @param int $user_id User identifier
     * @param PassportElementError[] $errors A JSON-serialized array describing the errors
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setPassportDataErrors(int $user_id, array $errors): bool
    {
        return $this->raw('setPassportDataErrors', func_get_args());
    }

    /**
     * Use this method to send a game. On success, the sent Message is returned.
     *
     * @param int $chat_id Unique identifier for the target chat
     * @param string $game_short_name Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather.
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function sendGame(
        int $chat_id,
        string $game_short_name,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->raw('sendGame', func_get_args());
    }

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
     *
     * @param int $user_id User identifier
     * @param int $score New score, must be non-negative
     * @param bool $force Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @param bool $disable_edit_message Pass True if the game message should not be automatically edited to include the current scoreboard
     * @param int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the sent message
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @throws \Telepath\Exceptions\TelegramException
     */
    public function setGameScore(
        int $user_id,
        int $score,
        ?bool $force = null,
        ?bool $disable_edit_message = null,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ): \Telepath\Telegram\Message|bool {
        return $this->raw('setGameScore', func_get_args());
    }

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
     *
     * @param int $user_id Target user id
     * @param int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
     * @param int $message_id Required if inline_message_id is not specified. Identifier of the sent message
     * @param string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @return \Telepath\Telegram\GameHighScore[]
     * @throws \Telepath\Exceptions\TelegramException
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

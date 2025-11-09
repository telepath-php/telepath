<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
class ExternalReplyInfo extends Type
{
    /** Origin of the message replied to by the given message */
    public MessageOrigin $origin;

    /** <em>Optional</em>. Chat the original message belongs to. Available only if the chat is a supergroup or a channel. */
    public ?Chat $chat = null;

    /** <em>Optional</em>. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel. */
    public ?int $message_id = null;

    /** <em>Optional</em>. Options used for link preview generation for the original message, if it is a text message */
    public ?LinkPreviewOptions $link_preview_options = null;

    /** <em>Optional</em>. Message is an animation, information about the animation */
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

    /** <em>Optional</em>. Message is a scheduled giveaway, information about the giveaway */
    public ?Giveaway $giveaway = null;

    /** <em>Optional</em>. A giveaway with public winners was completed */
    public ?GiveawayWinners $giveaway_winners = null;

    /** <em>Optional</em>. Message is an invoice for a <a href="https://core.telegram.org/bots/api#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a> */
    public ?Invoice $invoice = null;

    /** <em>Optional</em>. Message is a shared location, information about the location */
    public ?Location $location = null;

    /** <em>Optional</em>. Message is a native poll, information about the poll */
    public ?Poll $poll = null;

    /** <em>Optional</em>. Message is a venue, information about the venue */
    public ?Venue $venue = null;

    /**
     * @param  MessageOrigin  $origin  Origin of the message replied to by the given message
     * @param  Chat  $chat  <em>Optional</em>. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     * @param  int  $message_id  <em>Optional</em>. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     * @param  LinkPreviewOptions  $link_preview_options  <em>Optional</em>. Options used for link preview generation for the original message, if it is a text message
     * @param  Animation  $animation  <em>Optional</em>. Message is an animation, information about the animation
     * @param  Audio  $audio  <em>Optional</em>. Message is an audio file, information about the file
     * @param  Document  $document  <em>Optional</em>. Message is a general file, information about the file
     * @param  PaidMediaInfo  $paid_media  <em>Optional</em>. Message contains paid media; information about the paid media
     * @param  PhotoSize[]  $photo  <em>Optional</em>. Message is a photo, available sizes of the photo
     * @param  Sticker  $sticker  <em>Optional</em>. Message is a sticker, information about the sticker
     * @param  Story  $story  <em>Optional</em>. Message is a forwarded story
     * @param  Video  $video  <em>Optional</em>. Message is a video, information about the video
     * @param  VideoNote  $video_note  <em>Optional</em>. Message is a <a href="https://telegram.org/blog/video-messages-and-telescope">video note</a>, information about the video message
     * @param  Voice  $voice  <em>Optional</em>. Message is a voice message, information about the file
     * @param  bool  $has_media_spoiler  <em>Optional</em>. <em>True</em>, if the message media is covered by a spoiler animation
     * @param  Checklist  $checklist  <em>Optional</em>. Message is a checklist
     * @param  Contact  $contact  <em>Optional</em>. Message is a shared contact, information about the contact
     * @param  Dice  $dice  <em>Optional</em>. Message is a dice with random value
     * @param  Game  $game  <em>Optional</em>. Message is a game, information about the game. <a href="https://core.telegram.org/bots/api#games">More about games &#xBB;</a>
     * @param  Giveaway  $giveaway  <em>Optional</em>. Message is a scheduled giveaway, information about the giveaway
     * @param  GiveawayWinners  $giveaway_winners  <em>Optional</em>. A giveaway with public winners was completed
     * @param  Invoice  $invoice  <em>Optional</em>. Message is an invoice for a <a href="https://core.telegram.org/bots/api#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api#payments">More about payments &#xBB;</a>
     * @param  Location  $location  <em>Optional</em>. Message is a shared location, information about the location
     * @param  Poll  $poll  <em>Optional</em>. Message is a native poll, information about the poll
     * @param  Venue  $venue  <em>Optional</em>. Message is a venue, information about the venue
     */
    public static function make(
        MessageOrigin $origin,
        ?Chat $chat = null,
        ?int $message_id = null,
        ?LinkPreviewOptions $link_preview_options = null,
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
        ?bool $has_media_spoiler = null,
        ?Checklist $checklist = null,
        ?Contact $contact = null,
        ?Dice $dice = null,
        ?Game $game = null,
        ?Giveaway $giveaway = null,
        ?GiveawayWinners $giveaway_winners = null,
        ?Invoice $invoice = null,
        ?Location $location = null,
        ?Poll $poll = null,
        ?Venue $venue = null,
    ): static {
        return new static([
            'origin' => $origin,
            'chat' => $chat,
            'message_id' => $message_id,
            'link_preview_options' => $link_preview_options,
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
            'has_media_spoiler' => $has_media_spoiler,
            'checklist' => $checklist,
            'contact' => $contact,
            'dice' => $dice,
            'game' => $game,
            'giveaway' => $giveaway,
            'giveaway_winners' => $giveaway_winners,
            'invoice' => $invoice,
            'location' => $location,
            'poll' => $poll,
            'venue' => $venue,
        ]);
    }
}

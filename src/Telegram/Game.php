<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game extends Type
{
    /** Title of the game */
    public string $title;

    /** Description of the game */
    public string $description;

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @var PhotoSize[]
     */
    public array $photo;

    /** <em>Optional</em>. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls <a href="https://core.telegram.org/bots/api#setgamescore">setGameScore</a>, or manually edited using <a href="https://core.telegram.org/bots/api#editmessagetext">editMessageText</a>. 0-4096 characters. */
    public ?string $text = null;

    /**
     * <em>Optional</em>. Special entities that appear in <em>text</em>, such as usernames, URLs, bot commands, etc.
     *
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /** <em>Optional</em>. Animation that will be displayed in the game message in chats. Upload via <a href="https://t.me/botfather">BotFather</a> */
    public ?Animation $animation = null;

    /**
     * @param  string  $title  Title of the game
     * @param  string  $description  Description of the game
     * @param  PhotoSize[]  $photo  Photo that will be displayed in the game message in chats.
     * @param  string  $text  <em>Optional</em>. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls <a href="https://core.telegram.org/bots/api#setgamescore">setGameScore</a>, or manually edited using <a href="https://core.telegram.org/bots/api#editmessagetext">editMessageText</a>. 0-4096 characters.
     * @param  MessageEntity[]  $text_entities  <em>Optional</em>. Special entities that appear in <em>text</em>, such as usernames, URLs, bot commands, etc.
     * @param  Animation  $animation  <em>Optional</em>. Animation that will be displayed in the game message in chats. Upload via <a href="https://t.me/botfather">BotFather</a>
     */
    public static function make(
        string $title,
        string $description,
        array $photo,
        ?string $text = null,
        ?array $text_entities = null,
        ?Animation $animation = null,
    ): static {
        return new static([
            'title' => $title,
            'description' => $description,
            'photo' => $photo,
            'text' => $text,
            'text_entities' => $text_entities,
            'animation' => $animation,
        ]);
    }
}

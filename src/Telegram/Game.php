<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game extends \Tii\Telepath\Types\Type
{
    /** Title of the game */
    public string $title;

    /** Description of the game */
    public string $description;

    /**
     * Photo that will be displayed in the game message in chats.
     * @var PhotoSize[]
     */
    public array $photo;

    /** Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters. */
    public ?string $text = null;

    /**
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     * @var MessageEntity[]
     */
    public ?array $text_entities = null;

    /** Optional. Animation that will be displayed in the game message in chats. Upload via BotFather */
    public ?Animation $animation = null;

    /**
     * @param string $title Title of the game
     * @param string $description Description of the game
     * @param PhotoSize[] $photo Photo that will be displayed in the game message in chats.
     * @param string $text Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     * @param MessageEntity[] $text_entities Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     * @param Animation $animation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    public static function make(
        string $title,
        string $description,
        array $photo,
        ?string $text = null,
        ?array $text_entities = null,
        ?Animation $animation = null
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

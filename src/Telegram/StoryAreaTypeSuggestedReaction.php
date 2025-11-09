<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType
{
    /** Type of the area, always “suggested_reaction” */
    public string $type = 'suggested_reaction';

    /** Type of the reaction */
    public ReactionType $reaction_type;

    /** <em>Optional</em>. Pass <em>True</em> if the reaction area has a dark background */
    public ?bool $is_dark = null;

    /** <em>Optional</em>. Pass <em>True</em> if reaction area corner is flipped */
    public ?bool $is_flipped = null;

    /**
     * @param  ReactionType  $reaction_type  Type of the reaction
     * @param  bool  $is_dark  <em>Optional</em>. Pass <em>True</em> if the reaction area has a dark background
     * @param  bool  $is_flipped  <em>Optional</em>. Pass <em>True</em> if reaction area corner is flipped
     */
    public static function make(ReactionType $reaction_type, ?bool $is_dark = null, ?bool $is_flipped = null): static
    {
        return new static([
            'reaction_type' => $reaction_type,
            'is_dark' => $is_dark,
            'is_flipped' => $is_flipped,
        ]);
    }
}

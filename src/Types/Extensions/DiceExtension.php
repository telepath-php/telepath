<?php

namespace Telepath\Types\Extensions;

use Telepath\Telegram\Dice;
use Telepath\Types\Dice\SlotMachineSymbol;


/**
 * @mixin Dice
 */
trait DiceExtension
{

    /**
     * @return SlotMachineSymbol[]
     */
    public function slotMachineSymbols(): array
    {
        return match ($this->value) {
            1  => [SlotMachineSymbol::Bar, SlotMachineSymbol::Bar, SlotMachineSymbol::Bar],
            2  => [SlotMachineSymbol::Grape, SlotMachineSymbol::Bar, SlotMachineSymbol::Bar],
            3  => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar, SlotMachineSymbol::Bar],
            4  => [SlotMachineSymbol::Seven, SlotMachineSymbol::Bar, SlotMachineSymbol::Bar],
            5  => [SlotMachineSymbol::Bar, SlotMachineSymbol::Grape, SlotMachineSymbol::Bar],
            6  => [SlotMachineSymbol::Grape, SlotMachineSymbol::Grape, SlotMachineSymbol::Bar],
            7  => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape, SlotMachineSymbol::Bar],
            8  => [SlotMachineSymbol::Seven, SlotMachineSymbol::Grape, SlotMachineSymbol::Bar],
            9  => [SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar],
            10 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar],
            11 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar],
            12 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar],
            13 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Seven, SlotMachineSymbol::Bar],
            14 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Seven, SlotMachineSymbol::Bar],
            15 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven, SlotMachineSymbol::Bar],
            16 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Seven, SlotMachineSymbol::Bar],
            17 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Bar, SlotMachineSymbol::Grape],
            18 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Bar, SlotMachineSymbol::Grape],
            19 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar, SlotMachineSymbol::Grape],
            20 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Bar, SlotMachineSymbol::Grape],
            21 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Grape, SlotMachineSymbol::Grape],
            22 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Grape, SlotMachineSymbol::Grape],
            23 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape, SlotMachineSymbol::Grape],
            24 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Grape, SlotMachineSymbol::Grape],
            25 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape],
            26 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape],
            27 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape],
            28 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape],
            29 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Seven, SlotMachineSymbol::Grape],
            30 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Seven, SlotMachineSymbol::Grape],
            31 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven, SlotMachineSymbol::Grape],
            32 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Seven, SlotMachineSymbol::Grape],
            33 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon],
            34 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon],
            35 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon],
            36 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon],
            37 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon],
            38 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon],
            39 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon],
            40 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon],
            41 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon],
            42 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon],
            43 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon],
            44 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon],
            45 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon],
            46 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon],
            47 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon],
            48 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon],
            49 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Bar, SlotMachineSymbol::Seven],
            50 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Bar, SlotMachineSymbol::Seven],
            51 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Bar, SlotMachineSymbol::Seven],
            52 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Bar, SlotMachineSymbol::Seven],
            53 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Grape, SlotMachineSymbol::Seven],
            54 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Grape, SlotMachineSymbol::Seven],
            55 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Grape, SlotMachineSymbol::Seven],
            56 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Grape, SlotMachineSymbol::Seven],
            57 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven],
            58 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven],
            59 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven],
            60 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven],
            61 => [SlotMachineSymbol::Bar, SlotMachineSymbol::Seven, SlotMachineSymbol::Seven],
            62 => [SlotMachineSymbol::Grape, SlotMachineSymbol::Seven, SlotMachineSymbol::Seven],
            63 => [SlotMachineSymbol::Lemon, SlotMachineSymbol::Seven, SlotMachineSymbol::Seven],
            64 => [SlotMachineSymbol::Seven, SlotMachineSymbol::Seven, SlotMachineSymbol::Seven],
        };
    }

}
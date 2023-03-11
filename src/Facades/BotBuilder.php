<?php

namespace Telepath\Facades;

use Telepath\BotBuilder as FacadeRoot;

/**
 * @mixin \Telepath\BotBuilder
 */
class BotBuilder
{

    public static function __callStatic(string $name, array $arguments)
    {
        return (new FacadeRoot())
            ->$name(...$arguments);
    }

}
<?php

namespace Telepath\Types;

use Telepath\Bot;

interface Factory
{

    public static function factory(array $data, Bot $bot = null): self;

}
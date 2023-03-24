<?php

namespace Telepath\Events;

use Telepath\Telegram\Update;

class BeforeHandlingUpdate
{

    public function __construct(
        public Update $update,
    ) {}

}
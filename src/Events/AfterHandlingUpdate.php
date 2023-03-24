<?php

namespace Telepath\Events;

use Telepath\Telegram\Update;

class AfterHandlingUpdate
{

    public function __construct(
        public Update $update,
        public mixed $result = null,
    ) {}

}
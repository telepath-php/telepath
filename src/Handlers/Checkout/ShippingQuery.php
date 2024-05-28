<?php

namespace Telepath\Handlers\Checkout;

use Attribute;
use Telepath\Bot;
use Telepath\Handlers\Handler;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class ShippingQuery extends Handler
{
    public function responsible(Bot $bot, Update $update): bool
    {
        return $update->shipping_query !== null;
    }
}

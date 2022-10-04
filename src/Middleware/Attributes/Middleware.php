<?php

namespace Telepath\Middleware\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Middleware
{

    public array $config = [];

    public function __construct(
        public string $middleware,
        ...$config
    ) {
        $this->config = $config;
    }

}
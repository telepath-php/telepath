<?php

namespace Tii\Telepath\Types;

interface Factory
{

    public static function factory(array $data): self;

}
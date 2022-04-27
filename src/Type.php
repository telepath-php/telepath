<?php

namespace Tii\Telepath;

class Type
{

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

}
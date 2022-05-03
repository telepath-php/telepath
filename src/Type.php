<?php

namespace Tii\Telepath;

class Type
{
    use CastsToTelegramTypes;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {

            $property = new \ReflectionProperty($this, $key);
            preg_match('/@var (.+)\[]\n/u', $property->getDocComment(), $matches);

            $this->$key = $this->objectify($value, $property->getType(), $matches[1] ?? null);

        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

}
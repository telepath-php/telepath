<?php

namespace Tii\Telepath\Types;

use Tii\Telepath\CastsToTelegramTypes;

class Type implements \JsonSerializable
{
    use CastsToTelegramTypes;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {

            $property = new \ReflectionProperty($this, $key);
            preg_match('/@var (.+)\[]\n/u', $property->getDocComment(), $matches);

            $this->$key = $this->objectify($value, $property->getType(), $matches[1] ?? null);

        }
    }

    public function toArray(): array
    {
        return array_filter(get_object_vars($this), fn($item) => ! is_null($item));
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
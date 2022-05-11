<?php

namespace Tii\Telepath\Types;

use Tii\Telepath\Types\CastsToTelegramTypes;

class Type implements \JsonSerializable
{
    use CastsToTelegramTypes;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {

            try {
                $property = new \ReflectionProperty($this, $key);
                preg_match('/@var (.+)\[]\n/u', $property->getDocComment(), $matches);
                $this->$key = $this->objectify($value, $property->getType(), $matches[1] ?? null);
            } catch (\ReflectionException $e) {
                if (is_array($value) && array_keys($value) !== range(0, count($value) - 1)) {
                    $this->$key = (object) $value;
                } else {
                    $this->$key = $value;
                }
            }

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
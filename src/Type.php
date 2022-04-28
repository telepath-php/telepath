<?php

namespace Tii\Telepath;

class Type
{

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $property = new \ReflectionProperty($this, $key);

            $type = $property->getType();
            if ($type instanceof \ReflectionNamedType && ! $type->isBuiltin()) {

                $class = $type->getName();
                $value = new $class($value);

            } elseif ($type->getName() === 'array'
                && preg_match('/@var (.+)\[]\n/u', $property->getDocComment(), $matches) === 1) {

                $class = 'Tii\\Telepath\\Telegram\\' . $matches[1];
                $value = array_map(fn($entity) => new $class($entity), $value);

            }

            $this->$key = $value;
        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

}
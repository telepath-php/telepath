<?php

namespace Tii\Telepath\Types;


trait CastsToTelegramTypes
{

    protected function objectify(mixed $value, \ReflectionType $types, string $phpDocType = null)
    {

        if ($types instanceof \ReflectionUnionType) {
            $types = $types->getTypes();
        } elseif ($types instanceof \ReflectionNamedType) {
            $types = [$types];
        } else {
            return $value;
        }

        foreach ($types as $type) {

            if ($type->isBuiltin() && $type->getName() !== 'array') {

                if ($type->getName() === get_debug_type($value)) {
                    return $value;
                }

            } elseif (is_array($value) && $type->getName() === 'array' && ! is_null($phpDocType)) {

                $class = 'Tii\\Telepath\\Telegram\\' . basename(str_replace('\\', '/', $phpDocType));

                if (! class_exists($class)) {
                    continue;
                }

                return array_map(fn($data) => new $class($data), $value);

            } elseif (is_array($value)) {

                $class = $type->getName();

                if (! class_exists($class)) {
                    continue;
                }

                return new $class($value);

            }

        }

        return $value;

    }

}
<?php

namespace Telepath\Types;


use Telepath\Bot;

trait CastsToTelegramTypes
{

    protected function objectify(mixed $value, \ReflectionType $types, string $phpDocType = null, Bot $bot = null)
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

                $class = 'Telepath\\Telegram\\' . basename(str_replace('\\', '/', $phpDocType));

                if (! class_exists($class)) {
                    continue;
                }

                return is_subclass_of($class, Factory::class)
                    ? array_map(fn($data) => $class::factory($data, $bot), $value)
                    : array_map(fn($data) => new $class($data, $bot), $value);

            } elseif (is_array($value)) {

                $class = $type->getName();

                if (! class_exists($class)) {
                    continue;
                }

                return is_subclass_of($class, Factory::class)
                    ? $class::factory($value, $bot)
                    : new $class($value, $bot);
            }

        }

        return $value;

    }

}
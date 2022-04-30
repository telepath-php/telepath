<?php

namespace Tii\Telepath;

class Type
{

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {

            try {
                $value = $this->objectify($key, $value);
            } catch (\ReflectionException $e) {
                //
            }

            $this->$key = $value;

        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    private function objectify(string $key, mixed $value): mixed
    {
        $property = new \ReflectionProperty($this, $key);

        $types = $property->getType();
        $docComment = $property->getDocComment();

        if ($types instanceof \ReflectionUnionType) {
            $types = $types->getTypes();
        } elseif ($types instanceof \ReflectionNamedType) {
            $types = [$types];
        } else {
            throw new \Exception(sprintf(
                "Incompatible type %s for key %s in %s",
                get_class($types),
                $key,
                get_class($this)
            ));
        }

        foreach ($types as $type) {

            if ($type->isBuiltin() && $type->getName() !== 'array') {

                if ($type->getName() === get_debug_type($value)) {
                    return $value;
                }

            } elseif (is_array($value) && $type->getName() === 'array') {

                if (preg_match('/@var (.+)\[]\n/u', $docComment, $matches) !== 1) {
                    continue;
                }

                $class = 'Tii\\Telepath\\Telegram\\' . $matches[1];

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
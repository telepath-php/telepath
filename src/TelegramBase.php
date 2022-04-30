<?php

namespace Tii\Telepath;

use GuzzleHttp\Client;

abstract class TelegramBase
{

    protected Client $client;
    private ?string $proxy = null;

    public function __construct(
        protected string $botToken,
        protected string $baseUri = 'https://api.telegram.org'
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($this->baseUri, '/') . "/bot{$this->botToken}/"
        ]);
    }

    public function enableProxy(string|array $proxy)
    {
        $this->proxy = $proxy;
    }

    public function disableProxy()
    {
        $this->proxy = null;
    }

    public function raw(string $method, $data = []): mixed
    {
        $parameters = array_map(
            fn($param) => $param->getName(),
            (new \ReflectionMethod($this, $method))->getParameters()
        );

        $data = array_merge($data, array_fill(0, count($parameters) - count($data), null));
        $data = array_combine($parameters, $data);
        $data = array_filter($data, fn($item) => ! is_null($item));

        $response = $this->client->post($method, [
            'form_params' => $data,
            'proxy'       => $this->proxy,
        ]);

        $jsonResponse = json_decode($response->getBody()->getContents(), true);
        if ($jsonResponse['ok'] === true) {
            return $this->objectify($method, $jsonResponse['result']);
        }

        throw new \Exception($jsonResponse['description']);
    }

    private function objectify(string $method, mixed $result): mixed
    {
        $methodReflector = new \ReflectionMethod($this, $method);
        $returnTypes = $methodReflector->getReturnType();
        $docComment = $methodReflector->getDocComment();

        if ($returnTypes instanceof \ReflectionUnionType) {
            $returnTypes = $returnTypes->getTypes();
        } elseif ($returnTypes instanceof \ReflectionNamedType) {
            $returnTypes = [$returnTypes];
        } else {
            throw new \Exception(sprintf(
                "Incompatible return type %s for method %s",
                get_class($returnTypes),
                $method)
            );
        }

        foreach ($returnTypes as $returnType) {
            // Try return types until one fits...

            if ($returnType->isBuiltin() && $returnType->getName() !== 'array') {

                if ($returnType->getName() === get_debug_type($result)) {
                    return $result;
                }

            } elseif (is_array($result) && $returnType->getName() === 'array') {

                if (preg_match('/@return (.+)\[]\n/u', $docComment, $matches) !== 1) {
                    continue;
                }

                $class = 'Tii\\Telepath\\' . $matches[1];

                if (! class_exists($class)) {
                    continue;
                }

                return array_map(fn($data) => new $class($data), $result);

            } elseif (is_array($result)) {

                $class = $returnType->getName();

                if (! class_exists($class)) {
                    continue;
                }

                return new $class($result);

            }

        }

        return $result;
    }

}
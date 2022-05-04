<?php

namespace Tii\Telepath;

use GuzzleHttp\Client;

abstract class Base
{

    use CastsToTelegramTypes;

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

        $sendsFiles = array_reduce($data, fn($carry, $item) => $carry || $item instanceof InputFile, false);

        $response = $sendsFiles
            ? $this->sendViaMultipart($method, $data)
            : $this->sendViaForm($method, $data);

        $jsonResponse = json_decode($response->getBody()->getContents(), true);
        if ($jsonResponse['ok'] === true) {
            $method = new \ReflectionMethod($this, $method);
            preg_match('/@return (.+)\[]\n/u', $method->getDocComment(), $matches);

            return $this->objectify($jsonResponse['result'], $method->getReturnType(), $matches[1] ?? null);
        }

        throw new \Exception($jsonResponse['description']);
    }

    protected function sendViaMultipart(string $method, array $data)
    {
        $multiparts = [];

        foreach ($data as $key => $value) {

            $multiparts[] = [
                'name'     => $key,
                'contents' => $value instanceof InputFile
                    ? $value->getContents() : json_encode($value)
            ];

        }

        return $this->client->post($method, [
            'multipart' => $multiparts,
            'proxy'     => $this->proxy
        ]);
    }

    protected function sendViaForm(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->post($method, [
            'form_params' => $data,
            'proxy'       => $this->proxy,
        ]);
    }

}
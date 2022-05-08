<?php

namespace Tii\Telepath\Layer;

use GuzzleHttp\Client;
use Tii\Telepath\CastsToTelegramTypes;
use Tii\Telepath\Exceptions\TelegramException;
use Tii\Telepath\InputFile;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\Telegram\User;

abstract class Base
{
    use CastsToTelegramTypes;

    protected Client $client;
    private ?string $proxy = null;

    public readonly string $username;

    public function __construct(
        protected string $botToken,
        protected string $baseUri = 'https://api.telegram.org'
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($this->baseUri, '/') . "/bot{$this->botToken}/"
        ]);

        /** @var User $me */
        $me = $this->raw('getMe');
        $this->username = $me->username;
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
            ? $this->sendAsMultipart($method, $data)
            : $this->sendAsJson($method, $data);

        $json = json_decode($response->getBody()->getContents(), true);
        if ($json['ok'] === true) {
            $method = new \ReflectionMethod($this, $method);
            preg_match('/@return (.+)\[]\n/u', $method->getDocComment(), $matches);

            return $this->objectify($json['result'], $method->getReturnType(), $matches[1] ?? null);
        }

        throw new TelegramException($json['description'], $json['error_code'] ?? 0);
    }

    protected function sendAsMultipart(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        $multipart = [];

        foreach ($data as $key => $value) {

            $multipart[] = [
                'name'     => $key,
                'contents' => $value instanceof InputFile
                    ? $value->getContents() : json_encode($value)
            ];

        }

        return $this->client->post($method, [
            'multipart'   => $multipart,
            'proxy'       => $this->proxy,
            'http_errors' => false,
        ]);
    }

    protected function sendAsJson(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->post($method, [
            'json'        => $data,
            'proxy'       => $this->proxy,
            'http_errors' => false,
        ]);
    }

    protected function sendAsForm(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        $data = array_map(fn($item) => is_array($item) || is_object($item) ? json_encode($item) : $item, $data);

        return $this->client->post($method, [
            'form_params' => $data,
            'proxy'       => $this->proxy,
            'http_errors' => false,
        ]);
    }

}
<?php

namespace Tii\Telepath\Layers;

use GuzzleHttp\Client;
use Tii\Telepath\Telegram\InputMedia;
use Tii\Telepath\Types\CastsToTelegramTypes;
use Tii\Telepath\Exceptions\TelegramException;
use Tii\Telepath\Types\InputFile;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\Telegram\User;

abstract class Base
{
    use CastsToTelegramTypes;

    public readonly string $username;
    protected Client $client;
    private ?string $proxy = null;

    public function __construct(
        protected string $botToken,
        protected string $baseUri = 'https://api.telegram.org'
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($this->baseUri, '/') . "/bot{$this->botToken}/",
        ]);

        /** @var User $me */
        $me = $this->raw('getMe');
        $this->username = $me->username;
    }

    public function enableProxy(string|array $proxy): static
    {
        $this->proxy = $proxy;

        return $this;
    }

    public function disableProxy(): static
    {
        $this->proxy = null;

        return $this;
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

        $sendsFiles = $this->hasInputFiles($data);

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

    protected function extractFiles(array|object &$input, int $depth = 1): array
    {
        $files = [];

        if (is_object($input)) {
            $data = get_object_vars($input);
        } else {
            $data = $input;
        }

        foreach ($data as $key => &$value) {
            if ($value instanceof InputFile && $depth > 1) {
                $name = bin2hex(random_bytes(10));
                $files[] = [
                    'name'     => $name,
                    'contents' => $value->getContents(),
                ];

                if (is_object($input)) {
                    $input->$key = "attach://{$name}";
                } else {
                    $value = "attach://{$name}";
                }
            } elseif (is_array($value) || is_object($value)) {
                $files = array_merge($files, $this->extractFiles($value, $depth + 1));
            }
        }

        return $files;
    }

    protected function sendAsMultipart(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        $multipart = [];

        $multipart = $this->extractFiles($data);

        foreach ($data as $key => $value) {

            if ($value instanceof InputFile) {
                $value = $value->getContents();
            } elseif (is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }

            $multipart[] = [
                'name'     => $key,
                'contents' => $value,
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

    protected function hasInputFiles(array $data): bool
    {
        foreach ($data as $key => $value) {

            if (is_array($value)) {
                $value = $value[0];
            }

            if ($value instanceof InputFile) {
                return true;
            }

            if ($value instanceof InputMedia) {
                return true;
            }

        }

        return false;
    }

}
<?php

namespace Telepath\Layers;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Telepath\Exceptions\TelegramException;
use Telepath\Files\ClientType;
use Telepath\Files\InputFile;
use Telepath\Telegram\InputMedia;
use Telepath\Types\CastsToTelegramTypes;

abstract class Base
{
    use CastsToTelegramTypes;

    public const DEFAULT_API_SERVER_URL = 'https://api.telegram.org';

    protected ?string $lastApiResult = null;

    private ?string $proxy = null;

    public function __construct(
        #[\SensitiveParameter] protected string $token,
        protected ?string $apiServerUrl = null,
    ) {
        $this->apiServerUrl ??= self::DEFAULT_API_SERVER_URL;
    }

    protected function enableProxy(string|array $proxy): static
    {
        $this->proxy = $proxy;

        return $this;
    }

    public function lastApiResult(): ?string
    {
        return $this->lastApiResult;
    }

    public function raw(string $method, $data = []): mixed
    {
        $parameters = array_map(
            fn ($param) => $param->getName(),
            (new \ReflectionMethod($this, $method))->getParameters()
        );

        $data = array_merge($data, array_fill(0, count($parameters) - count($data), null));
        $data = array_combine($parameters, $data);
        $data = array_filter($data, fn ($item) => ! is_null($item));

        $sendsFiles = $this->hasInputFiles($data);

        $response = match (true) {
            $sendsFiles => $this->sendAsMultipart($method, $data),
            count($data) === 0 => $this->sendAsQuery($method, $data),
            default => $this->sendAsJson($method, $data)
        };

        $json = json_decode($response->getBody()->getContents(), true);

        if ($json['ok'] !== true) {
            throw new TelegramException($json['description'], $json['error_code'] ?? 0);
        }

        $this->lastApiResult = $json['description'] ?? null;

        $method = new \ReflectionMethod($this, $method);
        preg_match('/@return (.+)\[]\n/u', $method->getDocComment(), $matches);

        return $this->objectify($json['result'], $method->getReturnType(), $matches[1] ?? null, $this);

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
                    'name' => $name,
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
        $multipart = $this->extractFiles($data);

        foreach ($data as $key => $value) {

            if ($value instanceof InputFile) {
                $value = $value->getContents();
            } elseif (is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }

            $multipart[] = [
                'name' => $key,
                'contents' => $value,
            ];

        }

        return $this->httpClient()->post($method, [
            'multipart' => $multipart,
        ]);
    }

    protected function sendAsJson(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        return $this->httpClient()->post($method, [
            'json' => $data,
        ]);
    }

    protected function sendAsForm(string $method, array $data): \Psr\Http\Message\ResponseInterface
    {
        $data = array_map(fn ($item) => is_array($item) || is_object($item) ? json_encode($item) : $item, $data);

        return $this->httpClient()->post($method, [
            'form_params' => $data,
        ]);
    }

    protected function sendAsQuery(string $method, array $data): ResponseInterface
    {
        return $this->httpClient()->get($method, [
            'query' => $data,
        ]);
    }

    protected function hasInputFiles(array $data): bool
    {
        foreach ($data as $value) {

            if (is_array($value)) {
                $value = reset($value);
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

    public function httpClient(ClientType $type = ClientType::DEFAULT): Client
    {
        $baseUri = match ($type) {
            ClientType::FILE => rtrim(static::DEFAULT_API_SERVER_URL, '/')."/file/bot{$this->token}/",
            ClientType::DEFAULT => rtrim($this->apiServerUrl, '/')."/bot{$this->token}/"
        };

        return new Client([
            'base_uri' => $baseUri,
            'proxy' => $this->proxy,
            'http_errors' => false,
        ]);
    }
}

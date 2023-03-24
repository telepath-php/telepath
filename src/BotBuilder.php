<?php

namespace Telepath;

use Psr\Cache\CacheItemPoolInterface;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;
use Telepath\Exceptions\BotBuilderException;

class BotBuilder
{

    protected ?string $token = null;

    protected ?string $customServer = null;

    protected ?string $httpProxy = null;

    protected ?string $handlerPath = null;

    protected ?LoggerInterface $logger = null;

    protected CacheInterface|CacheItemPoolInterface|null $cache = null;

    protected ?EventDispatcherInterface $eventDispatcher = null;

    protected ?ContainerInterface $container = null;

    final public function token(string $token): static
    {
        $this->token = $token;

        return $this;
    }

    final public function customServer(?string $customServer): static
    {
        $this->customServer = $customServer;

        return $this;
    }

    final public function httpProxy(?string $httpProxy): static
    {
        $this->httpProxy = $httpProxy;

        return $this;
    }

    final public function handlersIn(?string $path)
    {
        $this->handlerPath = $path;

        return $this;
    }

    final public function useLogger(?LoggerInterface $logger): static
    {
        $this->logger = $logger;

        return $this;
    }

    final public function useCache(CacheInterface|CacheItemPoolInterface|null $cache): static
    {
        $this->cache = $cache;

        return $this;
    }

    final public function useEventDispatcher(?EventDispatcherInterface $eventDispatcher): static
    {
        $this->eventDispatcher = $eventDispatcher;

        return $this;
    }

    final public function useServiceContainer(?ContainerInterface $container): static
    {
        $this->container = $container;

        return $this;
    }

    public function build(): Bot
    {
        if (! $this->token) {
            throw new BotBuilderException('You must provide an API token to create a bot instance.');
        }

        return new Bot(
            token: $this->token,
            handlerPath: $this->handlerPath,
            customServer: $this->customServer,
            httpProxy: $this->httpProxy,
            container: $this->container,
            cache: $this->cache,
            logger: $this->logger,
            eventDispatcher: $this->eventDispatcher,
        );
    }

}
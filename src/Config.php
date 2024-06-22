<?php

namespace Telepath;

use Psr\Cache\CacheItemPoolInterface;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;

class Config
{

    public ?string $apiServerUrl = null;

    public ?string $httpProxy = null;

    public ?LoggerInterface $logger = null;

    public CacheInterface|CacheItemPoolInterface|null $cache = null;

    public ?EventDispatcherInterface $eventDispatcher = null;

    public ?ContainerInterface $container = null;

    final public function apiServerUrl(?string $apiServerUrl): static
    {
        $this->apiServerUrl = $apiServerUrl;

        return $this;
    }

    final public function httpProxy(?string $httpProxy): static
    {
        $this->httpProxy = $httpProxy;

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

}

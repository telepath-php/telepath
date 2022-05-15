<?php

namespace Tii\Telepath\Cache;

use Cache\Bridge\SimpleCache\SimpleCacheBridge;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

trait UsesCache
{

    public function enableCaching(CacheInterface|CacheItemPoolInterface $cache): static
    {
        if ($cache instanceof CacheItemPoolInterface) {
            $cache = new SimpleCacheBridge($cache);
        }

        if ($this->container->has(CacheInterface::class)) {
            $this->container->extend(CacheInterface::class)->setConcrete($cache);
        } else {
            $this->container->addShared(CacheInterface::class, $cache);
        }

        return $this;
    }

}
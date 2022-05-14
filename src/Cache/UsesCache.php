<?php

namespace Tii\Telepath\Cache;

use Cache\Bridge\SimpleCache\SimpleCacheBridge;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

trait UsesCache
{

    protected ?CacheInterface $cache = null;

    public function enableCaching(CacheInterface|CacheItemPoolInterface $cache): static
    {
        if ($cache instanceof CacheItemPoolInterface) {
            $cache = new SimpleCacheBridge($cache);
        }

        $this->cache = $cache;

        return $this;
    }

    public function cache(): ?CacheInterface
    {
        return $this->cache;
    }

}
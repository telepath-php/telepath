<?php

namespace Telepath\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

class SimpleCacheBridge implements CacheInterface
{

    public function __construct(
        protected CacheItemPoolInterface $cacheItemPool
    ) {}

    public function get(string $key, mixed $default = null): mixed
    {
        $item = $this->cacheItemPool->getItem($key);

        if (! $item->isHit()) {
            return $default;
        }

        return $item->get();
    }

    public function set(string $key, mixed $value, \DateInterval|int|null $ttl = null): bool
    {
        $item = $this->cacheItemPool->getItem($key);

        $item->set($value);
        $item->expiresAfter($ttl);

        return $this->cacheItemPool->save($item);
    }

    public function delete(string $key): bool
    {
        return $this->cacheItemPool->deleteItem($key);
    }

    public function clear(): bool
    {
        return $this->cacheItemPool->clear();
    }

    public function getMultiple(iterable $keys, mixed $default = null): iterable
    {
        if ($keys instanceof \Traversable) {
            $keys = iterator_to_array($keys);
        }

        $items = $this->cacheItemPool->getItems($keys);

        /** @var CacheItemInterface $item */
        foreach ($items as $key => $item) {
            if (! $item->isHit()) {
                yield $key => $default;
            } else {
                yield $key => $item->get();
            }
        }
    }

    public function setMultiple(iterable $values, \DateInterval|int|null $ttl = null): bool
    {
        $keys = [];
        $result = [];

        foreach ($values as $key => $value) {
            $key = (string) $key;

            $keys[] = $key;
            $result[$key] = $value;
        }

        $items = $this->cacheItemPool->getItems($keys);

        $success = true;

        /** @var CacheItemInterface $item */
        foreach ($items as $key => $item) {
            $item->set($result[$key]);
            $item->expiresAfter($ttl);

            $success = $success && $this->cacheItemPool->saveDeferred($item);
        }

        return $success && $this->cacheItemPool->commit();
    }

    public function deleteMultiple(iterable $keys): bool
    {
        if ($keys instanceof \Traversable) {
            $keys = iterator_to_array($keys);
        }

        return $this->cacheItemPool->deleteItems($keys);
    }

    public function has(string $key): bool
    {
        return $this->cacheItemPool->hasItem($key);
    }

}
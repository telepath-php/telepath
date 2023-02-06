<?php

use Cache\Bridge\SimpleCache\SimpleCacheBridge;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use function Pest\Faker\faker;

function randomKeyValues($count = 10)
{
    $values = [];

    for ($i = 0; $i < $count; $i++) {
        $values[faker()->word] = faker()->text;
    }

    return $values;
}

beforeEach(function () {
    $this->cache = new ArrayAdapter();
    $this->bridge = new SimpleCacheBridge($this->cache);

    $this->key = faker()->word;
    $this->value = faker()->text;
});

it('can save and retrieve a single value', function () {

    $this->bridge->set($this->key, $this->value);

    $retrieved = $this->bridge->get($this->key);
    expect($retrieved)->toBe($this->value);

});


it('expires values after ttl', function () {

    $this->bridge->set($this->key, $this->value, 1);

    $retrievedBefore = $this->bridge->get($this->key);
    expect($retrievedBefore)->toBe($this->value);

    sleep(1);

    $retrievedAfter = $this->bridge->get($this->key);
    expect($retrievedAfter)->toBeNull();

});


it('can save and retrieve multiple values', function () {

    $values = randomKeyValues();

    $success = $this->bridge->setMultiple($values);
    expect($success)->toBeTrue();

    $iterator = $this->bridge->getMultiple(array_keys($values));
    $retrieved = iterator_to_array($iterator);
    expect($retrieved)->toBe($values);

});
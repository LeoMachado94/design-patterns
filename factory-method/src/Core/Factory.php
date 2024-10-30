<?php

namespace FactoryMethod\Core;

use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;
use ReflectionClass;

class Factory
{
    private string $fakerLocale = FakerFactory::DEFAULT_LOCALE;

    public function make(int $count = 1, array $state = []): array
    {
        $factoryClass = get_called_class();
        return (new $factoryClass)->definition();
    }

    public function faker(): FakerGenerator
    {
        return FakerFactory::create($this->fakerLocale);
    }
}
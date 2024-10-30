<?php

namespace FactoryMethod\Core;

use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;
use ReflectionClass;

class Factory
{
    private string $fakerLocale = FakerFactory::DEFAULT_LOCALE;

    public function create(int $count = 1, array $state = [])
    {
        $factoryClass = new (get_called_class());

        if ($count === 1) {
            $data = $this->getDataAndReplaceState($factoryClass);
            return new ($factoryClass->model)(...$state);
        }

        $items = [];

        while (count($items) < $count) {
            $data = $this->getDataAndReplaceState($factoryClass);
            $items[] = new ($factoryClass->model)(...$state);
        }

        return $items;
    }

    public function make(int $count = 1, array $state = [])
    {
        $factoryClass = get_called_class();
        return (new $factoryClass)->definition();
    }

    public function setFakerLocale($locale): self
    {
        $this->fakerLocale = $locale;
        return $this;
    }

    public function getDataAndReplaceState($factoryClass, array $state = []): array
    {
        $factoryResult = $factoryClass->definition();

        return !empty($state)
            ? array_merge($factoryResult, $state)
            : $factoryResult;
    }

    public function faker(): FakerGenerator
    {
        return FakerFactory::create($this->fakerLocale);
    }
}
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

        if ($count > 1) {
            $items = [];

            while (count($items) < $count) {
                $data = $this->getDataAndReplaceState($factoryClass);

                if (!empty($state)) {
                    $data = array_merge($data, $state);
                }

                $items[] = new ($factoryClass->model)(...$data);
            }

            return $items;
        }

        $data = $this->getDataAndReplaceState($factoryClass);

        if (!empty($state)) {
            $data = array_merge($data, $state);
        }

        return new ($factoryClass->model)(...$data);
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
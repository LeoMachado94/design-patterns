<?php

namespace FactoryMethod\Models;

use FactoryMethod\Factories\AirplaneFactory;

class Airplane implements Transport
{
    public function __construct(
        public string $brand,
        public string $model,
        public string $color,
        public string $maximumHeight
    ) {}

    public static function factory(int $count = 1): Transport|array
    {
        if ($count > 1) {
            $items = [];

            for ($i=1; $i <= $count; $i++) {
                $data = (new AirplaneFactory())->definition();
                $items[] = new Airplane(...$data);
            }

            return $items;
        }

        $data = (new AirplaneFactory())->definition();
        return new Airplane(...$data);
    }
}
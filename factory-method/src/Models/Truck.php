<?php

namespace FactoryMethod\Models;

use FactoryMethod\Factories\TruckFactory;

class Truck implements Transport
{
    public function __construct(
        public string $brand,
        public string $model,
        public string $color,
        public string $wheels
    ) {}

    public static function factory($count = 1): Transport|array
    {
        if ($count > 1) {
            $items = [];

            for ($i=1; $i <= $count; $i++) {
                $data = (new TruckFactory())->definition();
                $items[] = new Truck(...$data);
            }

            return $items;
        }

        $data = (new TruckFactory())->definition();
        return new Truck(...$data);
    }
}
<?php

namespace FactoryMethod\Factories;

use FactoryMethod\Core\Factory;
use FactoryMethod\Models\Airplane;
use FactoryMethod\Models\Transport;

class TruckFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand' => $this->faker()->firstName,
            'model' => $this->faker()->firstName,
            'color' => $this->faker()->colorName,
            'wheels' => $this->faker()->randomElement([6,8,10]),
        ];
    }
}
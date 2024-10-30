<?php

namespace FactoryMethod\Factories;

use FactoryMethod\Core\Factory;
use FactoryMethod\Models\Airplane;
use FactoryMethod\Models\Transport;

class AirplaneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand' => $this->faker()->firstName,
            'model' => $this->faker()->firstName,
            'color' => $this->faker()->colorName,
            'maximumHeight' => $this->faker()->numberBetween(9000, 15000),
        ];
    }
}
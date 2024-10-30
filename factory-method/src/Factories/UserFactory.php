<?php

namespace FactoryMethod\Factories;

use FactoryMethod\Core\Factory;
use FactoryMethod\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker()->name,
            'age' => $this->faker()->numberBetween(30,40),
        ];
    }
}
<?php
require __DIR__ . '/../vendor/autoload.php';

use FactoryMethod\Factories\UserFactory;

$r1 = \FactoryMethod\Models\User::factory()->create(state: ['age' => 22]);
$r2 = \FactoryMethod\Models\User::factory()->create(5);
dd($r1, $r2);

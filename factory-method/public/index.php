<?php
require __DIR__ . '/../vendor/autoload.php';

use FactoryMethod\Factories\UserFactory;

$r = \FactoryMethod\Models\User::factory()->create(5);
dump($r);

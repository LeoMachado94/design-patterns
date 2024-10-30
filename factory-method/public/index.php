<?php
require __DIR__ . '/../vendor/autoload.php';

$truck = \FactoryMethod\Models\Truck::factory(3);
$airplane = \FactoryMethod\Models\Airplane::factory(9);
dump(json_encode($truck), json_encode($airplane));

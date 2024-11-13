<?php
require __DIR__ . '/../vendor/autoload.php';

$vehicles = [
    'car',
    'motorcycle'
];

$type = array_rand($vehicles);
$type = $vehicles[$type];

echo "Tipo do veículo sorteado: {$type} <br>";

$transport = match ($type)
{
    'car' => new \FactoryMethod\CarTransport(),
    'motorcycle' => new \FactoryMethod\MotorcycleTransport(),
    default => null
};

if ($transport === null) {
    dd('tipo de transporte indefinido');
}


$transport->startTransport();
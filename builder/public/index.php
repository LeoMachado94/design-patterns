<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * Objetos Definidos Previamente
 */
$director = new Builder\Director\Director();
$carBuilder = new \Builder\Builders\CarBuilder();
$truckBuilder = new \Builder\Builders\TruckBuilder();

$director->constructTruck($truckBuilder);

$truck = $truckBuilder->getResult();

$director->constructSedanCar($carBuilder);

$car = $carBuilder->getResult();

/**
 * Objetos NÃO Definidos Previamente
 */
$sportCar = $carBuilder->setCarType(\Builder\Components\CarType::SPORT)
    ->setEngine(new \Builder\Components\Engine(4000))
    ->setTransmission(\Builder\Components\Transmission::AUTOMATIC)
    ->setSeats(2);

dd($truck, $car, $sportCar);
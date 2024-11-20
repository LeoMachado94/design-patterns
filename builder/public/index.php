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
$sportCar = $carBuilder
    ->setCarType(\Builder\Components\CarType::SPORT)
    ->setEngine(new \Builder\Components\Engine(4000))
    ->setTransmission(\Builder\Components\Transmission::AUTOMATIC)
    ->setSeats(2)
    ->getResult();

/**
 * Objetos NÃO Definidos Previamente - Não Resetado, vai pegar os valores setador na instância
 */
$sportCar2 = $carBuilder
    ->setCarType(\Builder\Components\CarType::SPORT)
    ->getResult();

/**
 * Objetos NÃO Definidos Previamente - Resetado
 */
$carBuilder = new \Builder\Builders\CarBuilder();
$sportCar3 = $carBuilder
    ->setEngine(new \Builder\Components\Engine(9999))
    ->setCarType(\Builder\Components\CarType::SPORT);

dd(
    $truck->toArray(),
    $car->toArray(),
    $sportCar->toArray(),
    $sportCar2->toArray(),
//    $sportCar3->getResult(), // Gera erro pois não foram definidas as propriedades necessárias
);
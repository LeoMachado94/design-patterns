<?php

namespace Builder\Director;

use Builder\Builders\IBuilder;
use Builder\Components\CarType;
use Builder\Components\Engine;
use Builder\Components\Transmission;

class Director
{
    public function constructSedanCar(IBuilder $builder): IBuilder
    {
        $builder->setCarType(CarType::SEDAN);
        $builder->setEngine(new Engine(1600));
        $builder->setTransmission(Transmission::AUTOMATIC);
        $builder->setSeats(5);
        return $builder;
    }

    public function constructTruck(IBuilder $builder): IBuilder
    {
        $builder->setCarType(CarType::TRUCK);
        $builder->setEngine(new Engine(13000));
        $builder->setTransmission(Transmission::MANUAL);
        $builder->setSeats(3);
        return $builder;
    }
}
<?php

namespace FactoryMethod;

use FactoryMethod\Vehicles\Car;
use FactoryMethod\Vehicles\IVehicle;

class CarTransport extends Transport
{
    public function createTransport(): IVehicle
    {
        return new Car();
    }
}
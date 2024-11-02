<?php

namespace FactoryMethod;

use FactoryMethod\Vehicles\IVehicle;
use FactoryMethod\Vehicles\Motorcycle;

class MotorcycleTransport extends Transport
{
    public function createTransport(): IVehicle
    {
        return new Motorcycle();
    }
}
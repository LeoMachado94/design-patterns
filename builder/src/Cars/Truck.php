<?php

namespace Builder\Cars;

use Builder\Components\CarType;
use Builder\Components\Engine;
use Builder\Components\Transmission;

class Truck
{
    public function __construct(
        private CarType $carType,
        private Engine $engine,
        private Transmission $transmission,
        private int $seats
    ) {}

    public function getCarType(): CarType
    {
        return $this->carType;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

    public function getTransmission(): Transmission
    {
        return $this->transmission;
    }

    public function getSeats(): int
    {
        return $this->seats;
    }
}
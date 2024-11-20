<?php

namespace Builder\Builders;

use Builder\Components\CarType;
use Builder\Components\Engine;
use Builder\Components\Transmission;

interface IBuilder
{
    public function setCarType(CarType $carType);
    public function setEngine(Engine $engine);
    public function setTransmission(Transmission $transmission);
    public function setSeats(int $seats);
}
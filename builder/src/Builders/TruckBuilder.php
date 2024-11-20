<?php

namespace Builder\Builders;

use Builder\Cars\Truck;
use Builder\Components\CarType;
use Builder\Components\Engine;
use Builder\Components\Transmission;

class TruckBuilder implements IBuilder
{
    private CarType $carType;
    private Engine $engine;
    private Transmission $transmission;
    private int $seats;

    public function setCarType(CarType $carType): self
    {
        $this->carType = $carType;
        return $this;
    }

    public function setEngine(Engine $engine): self
    {
        $this->engine = $engine;
        return $this;
    }

    public function setTransmission(Transmission $transmission): self
    {
        $this->transmission = $transmission;
        return $this;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    public function getResult(): Truck
    {
        return new Truck(
            carType: $this->carType,
            engine: $this->engine,
            transmission: $this->transmission,
            seats:$this->seats
        );
    }
}
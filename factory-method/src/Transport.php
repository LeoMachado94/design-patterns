<?php

namespace FactoryMethod;

use FactoryMethod\Vehicles\IVehicle;

abstract class Transport
{
    protected IVehicle $vehicle;

    public function startTransport(): void
    {
         $transport = $this->createTransport();
         $transport->startRoute();
    }

    protected abstract function createTransport(): IVehicle;
}
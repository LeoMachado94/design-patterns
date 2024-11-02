<?php

namespace FactoryMethod\Vehicles;

interface IVehicle
{
    public function startRoute(): void;
    public function getCargo(): void;
}
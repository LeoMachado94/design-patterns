<?php

namespace FactoryMethod\Vehicles;

class Car implements IVehicle
{
    public function startRoute(): void
    {
        $this->getCargo();
        echo "Iniciando o Trajeto. <br>";
    }

    public function getCargo(): void
    {
        echo "Pegamos os passageiros, estamos prontos!<br>";
    }
}
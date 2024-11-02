<?php

namespace FactoryMethod\Vehicles;

class Motorcycle implements IVehicle
{
    public function startRoute(): void
    {
        $this->getCargo();
        echo "Iniciando a Entrega.<br>";
    }

    public function getCargo(): void
    {
        echo "Pegamos a(s) encomenda(s), podemos ir!<br>";
    }
}
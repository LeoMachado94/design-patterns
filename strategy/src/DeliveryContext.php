<?php

namespace src;

use src\Strategies\DeliveryStrategy;

class DeliveryContext
{
    public function __construct(private readonly DeliveryStrategy $strategy) {}

    // Run delivery
    public function execute()
    {
        $client = $this->strategy->getCustomer();
        // Cadastra o Cliente
        // Envia E-mail de boas vindas
    }
}
<?php
namespace Strategy\Strategies;

interface DeliveryStrategy
{
    public function getCustomer(array $payload): Customer;

    /**
     * @param array $payload
     * @return Product[]
     */
    public function getProducts(array $payload): array;
}
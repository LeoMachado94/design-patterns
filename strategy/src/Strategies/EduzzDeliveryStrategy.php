<?php
namespace Strategy\Strategies;

class EduzzDeliveryStrategy implements DeliveryStrategy
{
    public string $providerName = 'Eduzz';

    public function getCustomer(array $payload): Customer
    {
        return new Customer(
            $payload['customer'],
            $payload['email'],
            $payload['cpf'],
            $payload['phone'],
            $payload['address']
        );
    }
    public function getProducts(array $payload): array
    {
        $products = [];

        foreach ($payload['products'] as $product) {
            $products[] = new Product(
                $product['id'],
                $product['title']
            );
        }

        return $products;
    }
}
<?php
namespace Strategy\Strategies;

class HotmartDeliveryStrategy implements DeliveryStrategy
{
    public string $providerName = 'Hotmart';

    public function getCustomer(array $payload): Customer
    {
        return new Customer(
            $payload['client'],
            $payload['email'],
            $payload['document'],
            $payload['cellphone'],
            $payload['fulladdress']
        );
    }
    public function getProducts(array $payload): array
    {
        $products = [];

        foreach ($payload['items'] as $product) {
            $products[] = new Product(
                $product['id'],
                $product['productTitle']
            );
        }

        return $products;
    }
}
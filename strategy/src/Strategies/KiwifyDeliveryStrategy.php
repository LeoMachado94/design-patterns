<?php
namespace Strategy\Strategies;

class KiwifyDeliveryStrategy implements DeliveryStrategy
{
    public string $providerName = 'Kiwify';

    public function getCustomer(array $payload): Customer
    {
        return new Customer(
            $payload['client_name'],
            $payload['client_email'],
            $payload['client_document'],
            $payload['client_phone'],
            $payload['client_address']
        );
    }
    public function getProducts(array $payload): array
    {
        $products = [];

        foreach ($payload['product_list'] as $product) {
            $products[] = new Product(
                $product['id'],
                $product['product_name']
            );
        }

        return $products;
    }
}
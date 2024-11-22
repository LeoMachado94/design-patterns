<?php
namespace Strategy;

class Delivery
{
    // Run delivery
    public function execute(array $payload, $provider = 'eduzz'): void
    {
        $customer = match($provider) {
            'eduzz' => $this->getCustomerDataEduzz($payload),
            'hotmart' => $this->getCustomerDataHotmart($payload),
            'kiwify' => $this->getCustomerDataKiwify($payload),
            default => null
        };

        $products = match($provider) {
            'eduzz' => $this->getProductsDataEduzz($payload),
            'hotmart' => $this->getProductsDataHotmart($payload),
            'kiwify' => $this->getProductsDataKiwify($payload),
            default => null
        };

        match($provider) {
            'eduzz' => $this->deliveryEduzz($customer, $products),
            'hotmart' => $this->deliveryHotmart($customer, $products),
            'kiwify' => $this->deliveryKiwify($customer, $products),
            default => null
        };
    }

    public function getCustomerDataEduzz(array $payload): array
    {
        return [
            'name' => $payload['customer'] ?? '',
            'email' => $payload['email'] ?? '',
            'document' => $payload['cpf'] ?? '',
            'phone' => $payload['phone'] ?? '',
            'address' => $payload['address'] ?? ''
        ];
    }

    public function getProductsDataEduzz(array $payload): array
    {
        $products = [];

        foreach ($payload['products'] as $product) {
            $products[] = $this->formatProduct(
                productId: $product['id'],
                title: $product['title']
            );
        }

        return $products;
    }

    public function getCustomerDataHotmart(array $payload): array
    {
        return [
            'name' => $payload['cellphone'] ?? '',
            'email' => $payload['email'] ?? '',
            'document' => $payload['document'] ?? '',
            'phone' => $payload['cellphone'] ?? '',
            'address' => $payload['fulladdress'] ?? ''
        ];
    }

    public function getProductsDataHotmart(array $payload): array
    {
        $products = [];

        foreach ($payload['items'] as $product) {
            $products[] = $this->formatProduct(
                productId: $product['id'],
                title: $product['productTitle']
            );
        }

        return $products;
    }

    public function getCustomerDataKiwify(array $payload): array
    {
        return [
            'name' => $payload['client_name'] ?? '',
            'email' => $payload['client_email'] ?? '',
            'document' => $payload['client_document'] ?? '',
            'phone' => $payload['client_phone'] ?? '',
            'address' => $payload['client_address'] ?? ''
        ];
    }

    public function getProductsDataKiwify(array $payload): array
    {
        $products = [];

        foreach ($payload['product_list'] as $product) {
            $products[] = $this->formatProduct(
                productId: $product['id'],
                title: $product['product_name']
            );
        }

        return $products;
    }

    private function formatProduct(int|string $productId, string $title): array
    {
        return [
            'id' => $productId,
            'title' => $title,
        ];
    }

    public function deliveryEduzz(array $client, array $products): void
    {
        $clientName = $client['name'];
        $clientEmail = $client['email'];

        echo "Eduzz: Entregando produtos para o cliente: {$clientName}<br>";

        foreach ($products as $product) {
            $course = $product['title'];
            echo "Matriculado no curso {$course}<br>";
        }

        echo "Eduzz: Enviando e-mail de boas vindas: {$clientEmail}<br>";
    }

    public function deliveryHotmart(array $client, array $products): void
    {
        $clientName = $client['name'];
        $clientEmail = $client['email'];

        echo "Hotmart: Entregando produtos para o cliente: {$clientName}<br>";

        foreach ($products as $product) {
            $course = $product['title'];
            echo "Matriculado no curso {$course}<br>";
        }

        echo "Hotmart: Enviando e-mail de boas vindas: {$clientEmail}<br>";
    }

    public function deliveryKiwify(array $client, array $products): void
    {
        $clientName = $client['name'];
        $clientEmail = $client['email'];

        echo "Kiwify: Entregando produtos para o cliente: {$clientName}<br>";

        foreach ($products as $product) {
            $course = $product['title'];
            echo "Matriculado no curso {$course}<br>";
        }

        echo "Kiwify: Enviando e-mail de boas vindas: {$clientEmail}<br>";
    }
}
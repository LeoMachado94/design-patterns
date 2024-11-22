<?php

namespace Strategy;

use Strategy\Strategies\Customer;
use Strategy\Strategies\DeliveryStrategy;
use Strategy\Strategies\Product;

readonly class DeliveryContext
{
    public function __construct(
        private DeliveryStrategy $strategy,
        private array $payload
    ) {}

    // Run delivery
    public function getData(): array
    {
        return [
            'customer' => $this->strategy->getCustomer($this->payload),
            'products' => $this->strategy->getProducts($this->payload)
        ];
    }

    public function getCustomer(): Customer
    {
        return $this->strategy->getCustomer($this->payload);
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->strategy->getProducts($this->payload);
    }

    public function delivery(): void
    {
        $provider = $this->strategy->providerName;

        echo "******************************* Inicio Entrega {$provider} *************************** <br>";
        $customer = $this->getCustomer();

        echo "Entregando produtos para o cliente: {$customer->name}<br>";

        foreach ($this->getProducts() as $product) {
            echo "Matriculado no curso {$product->title}<br>";
        }

        echo "Enviando e-mail de boas vindas: {$customer->email}<br>";
        echo "******************************* Fim Entrega {$provider} ***************************** <br>";
    }
}
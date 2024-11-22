<?php
namespace src\Strategies;

class DeliveryStrategy
{
    public function __construct(
        private DeliveryStrategy $strategy
    ) {}
}
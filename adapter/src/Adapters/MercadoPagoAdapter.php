<?php

namespace Adapter\Adapters;

use Adapter\MercadoPago\MercadoPago;
use Adapter\Paypal\IPaypalPayments;

class MercadoPagoAdapter implements IPaypalPayments
{

    public function __construct(
        private MercadoPago $mercadoPago
    ) {}

    public function getToken(): string
    {
        return $this->mercadoPago->getToken();
    }

    public function paypalPayment()
    {
        return $this->mercadoPago->sendPayment();
    }

    public function paypalReceive()
    {
        return $this->mercadoPago->receivePayment();
    }
}
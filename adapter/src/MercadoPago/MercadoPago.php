<?php

namespace Adapter\MercadoPago;

class MercadoPago implements IMercadoPago
{
    public function getToken(): string
    {
        return 'aaaaaaaabbbbbb3123213';
    }

    public function sendPayment()
    {
        return 'efetuando pagamento com mercado pago.';
    }

    public function receivePayment()
    {
        return 'recevendo pagamento com mercado pago.';
    }
}
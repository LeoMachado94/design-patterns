<?php

namespace Adapter\Paypal;

class Paypal implements IPaypalPayments
{
    public function getToken(): string
    {
        return 'dadd8j19adsdnsadns9da';
    }

    public function paypalPayment()
    {
        return 'efetuando pagamento com paypal.';
    }

    public function paypalReceive()
    {
        return 'recebendo pagamento com paypal.';
    }
}
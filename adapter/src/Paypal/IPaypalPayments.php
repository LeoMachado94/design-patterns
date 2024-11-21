<?php

namespace Adapter\Paypal;

interface IPaypalPayments
{
    public function getToken(): string;
    public function paypalPayment();
    public function paypalReceive();
}
<?php

namespace Adapter\MercadoPago;

interface IMercadoPago
{
    public function getToken(): string;
    public function sendPayment();
    public function receivePayment();
}
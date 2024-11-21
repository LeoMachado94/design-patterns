<?php
require __DIR__ . '/../vendor/autoload.php';

/** Código original (paypal) */
$originalPayment = new Adapter\Paypal\Paypal();

/** Enviando Pagamento */
$originalResultPayment = $originalPayment->paypalPayment();

/** Recebendo Pagamento */
$originalResultReceive = $originalPayment->paypalReceive();




/** Código utilizando dois meios de pagamento (adapter) */
$gateway = 'mercadoPago';

$payment = match($gateway) {
    'mercadoPago' => new Adapter\Adapters\MercadoPagoAdapter(new Adapter\MercadoPago\MercadoPago()),
    default => new Adapter\Paypal\Paypal()
};

/** Enviando Pagamento */
$resultPayment = $payment->paypalPayment();

/** Recebendo Pagamento */
$resultReceive = $payment->paypalReceive();

echo "----------------------------- ORIGINAL ----------------------------- <br>";
echo "Resultado pagamento: {$originalResultPayment} <br>";
echo "Resultado pagamento: {$originalResultReceive} <br><br>";

echo "----------------------------- COM ADAPTER (mercado pago) ----------------------------- <br>";
echo "Resultado pagamento: {$resultPayment} <br>";
echo "Resultado pagamento: {$resultReceive} <br><br>";
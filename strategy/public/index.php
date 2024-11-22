<?php
require __DIR__ . '/../vendor/autoload.php';

$payloads = [
    'eduzz' => [
        'customer' => 'Leonardo M Mengue',
        'email' => 'leonardomengue@eduzz.com.br',
        'cpf' => '11111111111',
        'phone' => '55991111111',
        'address' => 'Rua Rio de Janeiro, 123, Santa Maria - RS',
        'products' => [
            [
                'id' => 1,
                'title' => 'Lógica de Programação'
            ],
            [
                'id' => 2,
                'title' => 'PHP Básico'
            ]
        ]
    ],
    'hotmart' => [
        'client' => 'Felipe Silveira',
        'email' => 'felipesilveira@eduzz.com.br',
        'document' => '22222222222',
        'cellphone' => '55992222222',
        'fulladdress' => 'Rua das Oliveiras, 789, São Paulo - SP',
        'items' => [
            [
                'id' => 123,
                'productTitle' => 'Aprendendo Javascript'
            ],
            [
                'id' => 234,
                'productTitle' => 'Curso de Typescript'
            ]
        ]
    ],
    'kiwify' => [
        'client_name' => 'Renato Vieira',
        'client_email' => 'renatovieira@eduzz.com.br',
        'client_document' => '33333333333',
        'client_phone' => '55993333333',
        'client_address' => 'Av Principal, 456, São Paulo - SP',
        'product_list' => [
            [
                'id' => '028a269a-6003-46cf-baaa-96f756bada39',
                'product_name' => 'Curso de CSS'
            ],
            [
                'id' => '949af7c2-eb53-4766-9b8e-9370d50388ea',
                'product_name' => 'Curso de Orientação a Objetos'
            ]
        ]
    ]
];

echo "----------------------------------------------------------------------------------------------------------------<br>";
echo "--------------------------------- SEM STRATEGY --------------------------------------------------------<br>";
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['eduzz'], 'eduzz');
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['hotmart'], 'hotmart');
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['kiwify'], 'kiwify');
echo "----------------------------------------------------------------------------------------------------------------<br>";


echo "----------------------------------------------------------------------------------------------------------------<br>";
echo "--------------------------------- COM STRATEGY --------------------------------------------------------<br>";
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['eduzz'], 'eduzz');
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['hotmart'], 'hotmart');
echo "----------------------------------------------------------------------------------------------------------------<br>";
(new \Strategy\Delivery)->execute($payloads['kiwify'], 'kiwify');
echo "----------------------------------------------------------------------------------------------------------------<br>";
<?php

require __DIR__ . '/vendor/autoload.php';
$apiKey = getenv('API_KEY');

$pagarMe = new \PagarMe\Sdk\PagarMe($apiKey);

$card = $pagarMe->card()
    ->create(
        '5355375430782595',
        'JOSE DAS COUVES',
        '0620'
    );

$address = $pagarMe->address()
    ->create(
        
    );

$phone = $pagarMe->phone()
    ->create(
        
    );

$customer = $pagarMe->customer()
    ->create(
        'JOSE DAS COUVES',
        'jose@couves.net',
        '09130141095',
        $address,
        $phone,
        '15021994',
        'M'
    );

$transaction = $pagarMe->transaction()
    ->creditCardTransaction(
        5000,
        $card,
        $customer,
        1,
        true,
        'https://www.pudim.com.br',
        []
    );


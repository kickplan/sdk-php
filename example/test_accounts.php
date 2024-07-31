<?php

require_once 'src/KickplanApi.php';

function exampleTests() {
    $client = new KickplanApi([
        'apiKey' => '<YOUR_API_KEY>',
        'baseUrl' => 'https://demo-control.proxy.kickplan.io'
    ]);

    try {
        $result = $client->accounts->post('features',['123']);
        print_r($result);
    } catch (Exception $e) {
        echo 'Accounts Error: ' . $e->getMessage();
    }
}

exampleTests();

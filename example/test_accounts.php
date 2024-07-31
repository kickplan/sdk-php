<?php

require_once 'src/KickplanApi.php';

function exampleTests() {
    $client = new KickplanApi([
        'apiKey' => getenv('KICKPLAN_API_KEY'),
        'baseUrl' => getenv('KICKPLAN_BASE_URL')
    ]);

    try {
        $result = $client->accounts->post('features',['123']);
        print_r($result);
    } catch (Exception $e) {
        echo 'Accounts Error: ' . $e->getMessage();
    }
}

exampleTests();

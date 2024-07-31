<?php

require_once 'src/KickplanApi.php';

function testResolve() {
    $client = new KickplanApi([
        'apiKey' => getenv('KICKPLAN_API_KEY'),
        'baseUrl' => getenv('KICKPLAN_BASE_URL')
    ]);

    try {
        $result = $client->features->resolve();
        print_r($result);
    } catch (Exception $e) {
        echo 'Features Error: ' . $e->getMessage();
    }
}

function testResolveWithAccount() {
    $client = new KickplanApi([
        'apiKey' => '<YOUR_API_KEY>',
        'baseUrl' => 'https://demo-control.proxy.kickplan.io'
    ]);

    try {
        $result = $client->features->resolveWithAccount('123');
        print_r($result);
    } catch (Exception $e) {
        echo 'Features Error: ' . $e->getMessage();
    }
}

function testIsFeatureAvailableForAccount () {
    $client = new KickplanApi([
        'apiKey' => '<YOUR_API_KEY>',
        'baseUrl' => 'https://demo-control.proxy.kickplan.io'
    ]);

    try {
        $result = $client->features->isFeatureAvailableForAccount('test', '123');
        print_r($result);
    } catch (Exception $e) {
        echo 'Features Error: ' . $e->getMessage();
    }

}

testResolve();
// testResolveWithAccount();
// testIsFeatureAvailableForAccount();
<?php

require_once 'src/KickplanApi.php';

function testSetMetricsKey() {
    $client = new KickplanApi([
        'apiKey' => '<YOUR_API_KEY>',
        'baseUrl' => 'https://demo-control.proxy.kickplan.io'
    ]);

    try {
        $result4 = $client->metrics->setMetricsKey(
            'video-watched',
            '60',
            '123'
        );
        print_r($result4);
    } catch (Exception $e) {
        echo 'Metrics Error: ' . $e->getMessage();
    }
}

testSetMetricsKey();

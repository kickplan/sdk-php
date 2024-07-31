<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class Base {
    private $client;

    public function __construct($config) {
        if (empty($config['apiKey'])) {
            throw new Exception("Please supply a KICKPLAN_API_KEY to initialize this client.");
        }

        $apiKey = $config['apiKey'];
        $baseUrl = $config['baseUrl'] ?? 'https://demo-control.proxy.kickplan.io';

        $this->client = new Client([
            'base_uri' => $baseUrl,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey
            ]
        ]);
    }

    protected function request($method, $endpoint, $options = []) {
        try {
            $response = $this->client->request($method, $endpoint, $options);
            $body = $response->getBody()->getContents();

            if ($response->getStatusCode() >= 400) {
                throw new Exception($response->getReasonPhrase());
            }

            // Some endpoints return empty body
            if (empty($body)) {
                return [];
            }

            // If we have data, it's JSON
            return json_decode($body, true);

        } catch (RequestException $e) {
            throw new Exception($e->getMessage());
        }
    }
}

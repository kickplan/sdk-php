<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class Base {
    private $client;

    public function __construct($config) {
        if (empty($config['apiKey']) && empty(getenv('KICKPLAN_API_KEY'))) {
            throw new Exception("Please supply a api key to initialize this client.");
        }

        if (empty($config['baseUrl']) && empty(getenv('KICKPLAN_BASE_URL'))) {
            throw new Exception("Please supply a base url to initialize this client.");
        }

        $apiKey = $config['apiKey'] || getenv('KICKPLAN_API_KEY');
        $baseUrl = $config['baseUrl'] || getenv('KICKPLAN_BASE_URL');

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

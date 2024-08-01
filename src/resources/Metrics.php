<?php
namespace Kickplan\KickplanSDK\Resources;

use Kickplan\KickplanSDK\Types\MetricsRequest;

class Metrics extends Base {
    public function __construct($config) {
        parent::__construct($config);
    }

    public function setMetricsKey(array $payload) {
        $metricsRequest = new MetricsRequest($payload);

        $options = [
            'json' => $metricsRequest->toArray()
        ];
        return $this->request('POST', 'api/metrics/set', $options);
    }
}
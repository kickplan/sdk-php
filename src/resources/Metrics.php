<?php
namespace Kickplan\KickplanSDK\Resources;

class Metrics extends Base {
    public function __construct($config) {
        parent::__construct($config);
    }

    public function setMetricsKey(string $key, string $account_key, $value, ?\DateTime $time = null, ?string $idempotency_key = null) {
        $options = [
            'json' => [
                'key' => $key,
                'account_key' => $account_key,
                'value' => $value,
                'time' => $time,
                'idempotency_key' => $idempotency_key
            ]
        ];
        return $this->request('POST', 'api/metrics/set', $options);
    }
}
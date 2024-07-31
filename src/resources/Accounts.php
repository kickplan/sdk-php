<?php
namespace Kickplan\KickplanSDK\Resources;

class Accounts extends Base {
    public function __construct($config) {
        parent::__construct($config);
    }

    public function post(string $key, array $plans) {
        $options = [
            'json' => [
                'key' => $key,
                'plans' => $plans
            ]
        ];
        return $this->request('POST', 'api/accounts', $options);
    }
}

<?php
namespace Kickplan\KickplanSDK\Resources;

use Kickplan\KickplanSDK\Types\AccountRequest;
class Accounts extends Base {
    public function __construct($config) {
        parent::__construct($config);
    }

    public function post(array $payload) {
        $accountRequest = new AccountRequest($payload);
        
        $options = [
            'json' => $accountRequest->toArray()
        ];
        return $this->request('POST', 'api/accounts', $options);
    }
}

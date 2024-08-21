<?php
namespace Kickplan\KickplanSdk\Resources;

use Kickplan\KickplanSdk\Types\AccountRequest;
class Accounts extends Base
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function create(array $payload)
    {
        $accountRequest = new AccountRequest($payload);

        $options = [
            "json" => $accountRequest->toArray(),
        ];
        return $this->request("POST", "api/accounts", $options);
    }

    public function update(array $payload)
    {
        $accountRequest = new AccountRequest($payload);

        $options = [
            "json" => $accountRequest->toArray(),
        ];
        return $this->request(
            "PUT",
            "api/accounts/{$payload["key"]}",
            $options
        );
    }
}

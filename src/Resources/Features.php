<?php
namespace Kickplan\Resources;

class Features extends Base
{
    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function resolve()
    {
        return $this->request("POST", "api/features/resolve");
    }

    public function resolveWithAccount(string $accountId)
    {
        $options = [
            "json" => [
                "context" => [
                    "account_id" => $accountId,
                ],
            ],
        ];
        return $this->request("POST", "api/features/resolve", $options);
    }

    public function resolveFeatureForAccount(
        string $featureName,
        string $accountId
    ) {
        $options = [
            "json" => [
                "context" => [
                    "account_id" => $accountId,
                ],
            ],
        ];
        return $this->request(
            "POST",
            "api/features/{$featureName}/resolve",
            $options
        );
    }
}

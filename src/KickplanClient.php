<?php
namespace Kickplan\KickplanSDK;

use Kickplan\KickplanSDK\Resources\Features;
use Kickplan\KickplanSDK\Resources\Accounts;
use Kickplan\KickplanSDK\Resources\Metrics;

class KickplanClient {
    public $features;
    public $accounts;
    public $metrics;

    public function __construct($config) {
        $this->features = new Features($config);
        $this->accounts = new Accounts($config);
        $this->metrics = new Metrics($config);
    }
}

<?php
namespace Kickplan\KickplanSdk;

use Kickplan\KickplanSdk\Resources\Features;
use Kickplan\KickplanSdk\Resources\Accounts;
use Kickplan\KickplanSdk\Resources\Metrics;

class KickplanClient
{
    public $features;
    public $accounts;
    public $metrics;

    public function __construct($config)
    {
        $this->features = new Features($config);
        $this->accounts = new Accounts($config);
        $this->metrics = new Metrics($config);
    }
}

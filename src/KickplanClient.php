<?php
namespace Kickplan;

use Kickplan\Resources\Features;
use Kickplan\Resources\Accounts;
use Kickplan\Resources\Metrics;

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

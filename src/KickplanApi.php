<?php

require_once 'resources/Features.php';
require_once 'resources/Accounts.php';
require_once 'resources/Metrics.php';

class KickplanApi {
    public $features;
    public $accounts;
    public $metrics;

    public function __construct($config) {
        $this->features = new Features($config);
        $this->accounts = new Accounts($config);
        $this->metrics = new Metrics($config);
    }
}

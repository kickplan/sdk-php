<?php
namespace Kickplan\KickplanSDK\Tests;

use PHPUnit\Framework\TestCase;
use Kickplan\KickplanSDK\KickplanClient;

class MetricsTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        $this->client = new KickplanClient([
            'apiKey' => getenv('KICKPLAN_API_KEY'),
            'baseUrl' => getenv('KICKPLAN_BASE_URL')
        ]);
    }

    public function testPost()
    {
        $response = $this->client->metrics->setMetricsKey([
            'key' => 'video-watched',
            'account_key' => '60',
            'value' => '123'
        ]);

        $this->assertIsArray($response);
    }
}

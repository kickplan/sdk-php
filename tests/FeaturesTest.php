<?php
namespace Kickplan\Kickplan\Tests;

use PHPUnit\Framework\TestCase;
use Kickplan\Kickplan\KickplanClient;

class FeaturesTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        $this->client = new KickplanClient([
            'apiKey' => getenv('KICKPLAN_API_KEY'),
            'baseUrl' => getenv('KICKPLAN_BASE_URL')
        ]);
    }

    public function testResolve()
    {
        $response = $this->client->features->resolve();

        $this->assertIsArray($response);
    }

    public function testResolveWithAccount() {
        $response = $this->client->features->resolveWithAccount('123');

        $this->assertIsArray($response);
    }

    public function testResolveFeatureForAccount() {
        $response = $this->client->features->resolveFeatureForAccount('test', '123');

        $this->assertIsArray($response);
    }
}


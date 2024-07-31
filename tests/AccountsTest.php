<?php
namespace Kickplan\KickplanSDK\Tests;

use PHPUnit\Framework\TestCase;
use Kickplan\KickplanSDK\KickplanClient;

class AccountsTest extends TestCase
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
        $response = $this->client->accounts->post([
            'key' => 'features',
            'plans' => ['123']
        ]);

        $this->assertIsArray($response);
    }
}

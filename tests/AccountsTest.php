<?php
namespace Kickplan\Tests;

use PHPUnit\Framework\TestCase;
use Kickplan\KickplanClient;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class AccountsTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        $this->client = new KickplanClient([
            "apiKey" => getenv("KICKPLAN_API_KEY"),
            "baseUrl" => getenv("KICKPLAN_BASE_URL"),
        ]);
    }

    public function testCreate()
    {
        $response = $this->client->accounts->create([
            "key" => Uuid::uuid4()->toString(),
            "account_plans" => [["plan_key" => "lite"]],
        ]);

        $this->assertIsArray($response);
    }

    public function testUpdate()
    {
        $response1 = $this->client->accounts->create([
            "key" => Uuid::uuid4()->toString(),
            "account_plans" => [["plan_key" => "lite"]],
        ]);

        $response2 = $this->client->accounts->update([
            "key" => $response1["key"],
            "account_plans" => [["plan_key" => "lite"]],
        ]);

        $this->assertIsArray($response2);
    }
}

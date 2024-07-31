# [Metrics](https://github.com/kickplan/sdk-php/blob/main/src/resources/Metrics.php)

### setMetricsKey
A request to set a value for a key metric, for a given account.

`$result = $client->metrics->setMetricsKey(string $key, string $value, string $account_key, ?DateTime $time, ?string $idempotency_key);`

Example:
```php
$result = $client->metrics->setMetricsKey($key, $value, $account_key);
```

Returns a response with metrics response json object.
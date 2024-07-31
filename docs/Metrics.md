# [Metrics](https://github.com/kickplan/sdk-php/blob/main/src/resources/Metrics.php)

### setMetricsKey
A request to set a value for a key metric, for a given account.

`$result = $client->metrics->setMetricsKey(array $payload);`

`$payload`: Associative array with the following keys:
 - `key` (string): The unique identifier.
 - `account_key` (string): The account identifier.
 - `value` (string | number | boolean | array): The value
 - `time` (optional, DateTime|string): Timestamp
 - `idempotency_key` (optional, string): Idempotency key

Example:
```php
$result = $client->metrics->setMetricsKey($payload);
```

Returns a response with metrics response json object.

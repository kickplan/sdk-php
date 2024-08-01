# Introduction

Kickplan takes care of the complex business logic for monetization, using our SDK, your application only needs to manage access to features and track value metrics. These functions are keyed by account. For detailed terminology, please consult our documentation. 

# Configuration

To import the package using Composer

```bash
composer require kickplan/sdk-php
```

After importing, please initialize your client:

```php
$client = new KickplanApi([
  'apiKey' => '<YOUR_KICKPLAN_API_KEY>',
  'baseUrl' => '<YOUR_KICKPLAN_BASE_URL>'
]);
```

.env variables are also supported via KICKPLAN_API_KEY and KICKPLAN_BASE_URL respectively.


# [Features](https://github.com/kickplan/sdk-php/blob/main/src/resources/Features.php):

### resolve
To check which features are resolvable

`resolve(): object`

Example:
```php
$result = $client->features->resolve();
```

### resolveWithAccount
To resolve features with context

`resolveWithAccount(string $accountId): object`

Example:
```php
$result = $client->features->resolveWithAccount($accountId)
```

### resolveFeatureForAccount
To resolve a specific feature with context

`resolveFeatureForAccount(string $featureName,string $accountId): object`

Example:
```php
$result = $client->features->resolveFeatureForAccount($featureName, $accountId)
```

# [Accounts](https://github.com/kickplan/sdk-typescript/blob/main/src/resources/Accounts.php):

### post
In order to resolve features for an account, Kickplan needs to know an account key and the plan key they are on. Plan keys are not currently exposed in the API but will be soon.

`post(array: $payload): object`

`$payload`: Associative array with the following keys:
 - `key` (string): The unique identifier.

Example:
```php
$result = $client->accounts->post($payload);
```

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


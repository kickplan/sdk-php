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
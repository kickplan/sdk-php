# [Accounts](https://github.com/kickplan/sdk-typescript/blob/main/src/resources/Accounts.php):

### post
In order to resolve features for an account, Kickplan needs to know an account key and the plan key they are on. Plan keys are not currently exposed in the API but will be soon.

`post(string $key, array $plans = []): object`

Example:
```php
$result = $client->accounts->post($key, $plans);
```
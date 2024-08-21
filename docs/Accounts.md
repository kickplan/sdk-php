# [Accounts](https://github.com/kickplan/sdk-typescript/blob/main/src/resources/Accounts.php):

### Create
In order to resolve features for an account, Kickplan needs to know an account key and the plan key they are on. Plan keys are not currently exposed in the API but will be soon.

`create(array: $payload): object`

`$payload`: Associative array with the following keys:
 - `key` (string): The unique identifier

Example:
```php
$result = $client->accounts->post($payload);
```

### Update
In order to resolve features for an account, Kickplan needs to know an account key and the plan key they are on. Plan keys are not currently exposed in the API but will be soon.

`update(array: $payload): object`

`$payload`: Associative array with the following keys:
 - `key` (string): The unique identifier

Example:
```php
$result = $client->accounts->post($payload);
```

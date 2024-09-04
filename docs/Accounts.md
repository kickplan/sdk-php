# [Accounts](https://github.com/kickplan/sdk-typescript/blob/main/src/resources/Accounts.php):

The accounts endpoint takes a payload that is in the same "shape" as your custom fields and includes the plan key that the account is on. When an account switches plans, you must keep the plan key up to date.

E.g.
```php
$payload = [
    "key" => "acme",
    "name" => "Acme",
    "account_plans" => [
        [
            "plan_key" => "essentials"
        ]
    ]
];
```

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

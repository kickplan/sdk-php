# Development notes:

To test this SDK follow these steps:
1. run `composer install` in root directory
2. run `composer dump-autoload` in root directory
3. Make sure there are KICKPLAN_API_KEY and KICKPLAN_BASE_URL ENV variables. you can add them by running:

```
export KICKPLAN_API_KEY="your_api_token"
export KICKPLAN_BASE_URL="your_url_here"
```
4. run `vendor/bin/phpunit` to run test

# Implimentation
See our [Introduction](docs/Introduction.md)
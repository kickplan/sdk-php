# Kickplan PHP SDK

## Development Notes

To test this SDK, follow these steps:

1. **Install Dependencies**  
   Run the following command in the root directory to install all required dependencies:
   ```bash
   composer install
   ```

2. **Autoload Classes**  
   Generate the autoload files with:
   ```bash
   composer dump-autoload
   ```

3. **Set Environment Variables**  
   Ensure the following environment variables are set:
   ```bash
   export KICKPLAN_API_KEY="your_api_token"
   export KICKPLAN_BASE_URL="your_url_here"
   ```

4. **Run Tests**  
   Execute the test suite using PHPUnit:
   ```bash
   vendor/bin/phpunit
   ```

## Implementation

For detailed implementation guidance, see our [Introduction](docs/Introduction.md).

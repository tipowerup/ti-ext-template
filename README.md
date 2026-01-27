# TiPowerUp Template

TastyIgniter extension template for TiPowerUp

## Installation

```bash
composer require tipowerup/ti-ext-template
```

Then install in TastyIgniter:

```bash
php artisan igniter:extension-install tipowerup.template
```

## Requirements

- TastyIgniter v4.0+
- PHP 8.2+

## Development

```bash
# Install dependencies
composer install

# Run tests
composer test

# Fix code style
composer test:lint-fix

# Run static analysis
composer test:static
```

## Directory Structure

```
ti-ext-template/
├── composer.json           # Package configuration
├── src/
│   └── Extension.php       # Main extension class
├── resources/
│   └── lang/en/            # Language files
├── database/
│   └── migrations/         # Database migrations
└── tests/                  # Pest tests
```

## License

MIT License - see [LICENSE.md](LICENSE.md)

# GMO Aozora Net Bank Open Api PHP SDK

## About

GMOあおぞらネット銀行について

https://gmo-aozora.com/

GMOあおぞらネット銀行 API開発者ポータルについて

https://api.gmo-aozora.com/ganb/developer/

## Version 
1.0.0

## Requirements
PHP 8.0 and later

### JWT compatibility

JWT 7 requires an HS256 client secret of at least 32 bytes. Confirm the
bank-issued client secret meets this requirement before upgrading. Short secrets
are rejected; do not pad or otherwise modify the issued secret.

Run the offline authentication regression tests after installing dependencies:

```sh
composer test:jwt
```

The tests cover valid signatures, nonce matching, tampering, expiration,
future claims, malformed tokens, and rejection of short secrets. They use local
test keys and do not contact the bank. Validation against the bank's staging
environment with the actual issued credentials is a separate integration check.

Dependencies are resolved for PHP 8.0 via Composer's `config.platform.php`.

## Installation

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/gmoaozora/gmo-aozora-api-php.git"
    }
  ],
  "require": {
    "gmoaozora/gmo-aozora-api-php": "*@dev"
  }
}
```

Then run `composer install`

### import the package
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```
## Getting Started

### Enviroment
Add the configuration below into your config file

* stg

    conf.json
    ```json
    {
        "AUTH_BASE_URL": "https://stg-api.gmo-aozora.com/ganb/api/auth/v1",
        "JWT_ISSUER": "https://stg-api.gmo-aozora.com/",
        "AUTH_PATH": "/authorization",
        "TOKEN_PATH": "/token",
        "SALT": "PleaseDefineYourself"
    }
    ```
    [Configuration.php - Personal ](./personal/lib/Configuration.php) 
    ```php
        protected $host = 'https://stg-api.gmo-aozora.com/ganb/api/personal/v1';
    ```
    [Configuration.php - Corporate ](./corporate/lib/Configuration.php) 
    ```php
        protected $host = 'https://stg-api.gmo-aozora.com/ganb/api/corporation/v1';
    ```
    [Configuration.php - Webhook ](./webhook/lib/Configuration.php) 
    ```php
        protected $host = 'https://stg-api.gmo-aozora.com/ganb/api/webhook/v1';
    ```

* prod

    conf.json
    ```json 
    {
        "AUTH_BASE_URL": "https://api.gmo-aozora.com/ganb/api/auth/v1",
        "JWT_ISSUER": "https://api.gmo-aozora.com/",
        "AUTH_PATH": "/authorization",
        "TOKEN_PATH": "/token",
        "SALT": "PleaseDefineYourself"
    }
    ```
    [Configuration.php - Personal ](./personal/lib/Configuration.php) 
    ```php
        protected $host = 'https://api.gmo-aozora.com/ganb/api/personal/v1';
    ```
    [Configuration.php - Corporate ](./corporate/lib/Configuration.php) 
    ```php
        protected $host = 'https://api.gmo-aozora.com/ganb/api/corporation/v1';
    ```
    [Configuration.php - Webhook ](./webhook/lib/Configuration.php) 
    ```php
        protected $host = 'https://api.gmo-aozora.com/ganb/api/webhook/v1';
    ```


## API Documents
* [**Auth**](./auth/docs/)
* [**Personal**](./personal/docs/)
* [**Corporate**](./corporate/docs/)
* [**Webhook**](./webhook/docs/)


## Autor

GMO Aozora Net Bank, Ltd. (open-api@gmo-aozora.com)

## Licence

[MIT](https://github.com/gmoaozora/gmo-aozora-api-php/blob/master/LICENSE)

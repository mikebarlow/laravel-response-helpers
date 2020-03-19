# Laravel API Response Helpers

A collection of helpers for returning a response from your API more expressively.

## Installation

Simply require the package via composer into your Laravel API.

    composer require mbarlow/laravel-response-helpers

No extra setup is required. The helper file is autoloaded via the "autoload" attributes of the `composer.json` file.

## Usage

Expanded documentation coming soon.

The following methods are available for returning from your endpoints.

    return ok($content, $headers); // 200
    
    return created($content, $headers); // 201
    
    return accepted($content, $headers); // 202
    
    return noContent($headers); // 204
    
    return movedPermanently($newUrl, $headers); // 301
    
    return found($url, $headers); // 302
    
    return seeOther($newUrl, $headers); // 303
    
    return temporaryRedirect($tempUrl, $headers); // 307
    
    return badRequest($content, $headers); // 400
    
    return unauthorized($content, $headers); // 401
    
    return paymentRequired($content, $headers); // 402
    
    return forbidden($content, $headers); // 403
    
    return notFound($content, $headers); // 404
    
    return methodNotAllowed($content, $headers); // 405
    
    return notAcceptable($content, $headers); // 406
    
    return gone($content, $headers); // 410
    
    return payloadTooLarge($content, $headers); // 413
    
    return unprocessableEntity($content, $headers); // 422
    
    return upgradeRequired($content, $headers); // 426
    
    return tooManyRequests($content, $headers); // 429
    
    return internalServerError($content, $headers); // 500
    
    return notImplemented($content, $headers); // 501
    
    return badGateway($content, $headers); // 502
    
    return serviceUnavailable($content, $headers); // 503
    
    return gatewayTimeout($content, $headers); // 504
    
    return insufficientStorage($content, $headers); // 507
    
## Testing

If you wish to run the tests, clone out the repo

    git clone git@github.com:mikebarlow/laravel-response-helpers.git
    
Change to the root of the repository and run composer install with the dev dependencies

    cd laravel-response-helpers
    composer install
    
A script is defined in the `composer.json` to run both the code sniffer and the unit tests
    
    composer run test
    
Or run them individually as required

    ./vendor/bin/phpunit
    
    ./vendor/bin/phpcs --standard=PSR2 src
    
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

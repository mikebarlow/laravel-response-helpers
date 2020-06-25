# Laravel API Response Helpers

[![Author](http://img.shields.io/badge/author-@mikebarlow-red.svg?style=flat-square)](https://twitter.com/mikebarlow)
[![Source Code](http://img.shields.io/badge/source-mikebarlow/laravel--response--helpers-brightgreen.svg?style=flat-square)](https://github.com/mikebarlow/laravel-response-helpers)
[![Latest Version](https://img.shields.io/github/release/mikebarlow/laravel-response-helpers.svg?style=flat-square)](https://github.com/mikebarlow/laravel-response-helpers/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/mikebarlow/laravel-response-helpers/blob/master/LICENSE)
[![Build Status](https://img.shields.io/github/workflow/status/mikebarlow/laravel-response-helpers/PHP%20Composer?style=flat-square)](https://github.com/mikebarlow/laravel-response-helpers/actions)

A collection of helpers for returning a response from your API more expressively.

## Installation

Simply require the package via composer into your Laravel API.

    composer require mbarlow/laravel-response-helpers

No extra setup is required. The helper file is autoloaded via the "autoload" attributes of the `composer.json` file.

## Usage

### 2xx Success

#### 200 OK

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return ok($content, $headers);
```    

#### 201 Created
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return created($content, $headers);
```

#### 202 Accepted
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return accepted($content, $headers);
```

#### 204 No Content
   
```php
    /**
     * @param  array  $headers
     */ 
    return noContent($headers);
```

### 3xx Redirection

#### 301 Moved Permanently
   
```php
    /**
     * @param  string $newUrl
     * @param  array  $headers
     */ 
    return movedPermanently($newUrl, $headers);
```

#### 302 Found
   
```php
    /**
     * @param  string $url
     * @param  array  $headers
     */ 
    return found($url, $headers);
```
    
#### 303 Found
   
```php
    /**
     * @param  string $newUrl
     * @param  array  $headers
     */ 
    return seeOther($newUrl, $headers);
```

#### 307 Temporary Redirect
   
```php
    /**
     * @param  string $tempUrl
     * @param  array  $headers
     */ 
    return temporaryRedirect($tempUrl, $headers);
```

### 4xx Client Errors
    
#### 400 Bad Request
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return badRequest($content, $headers);
```

#### 401 Unauthorized
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return unauthorized($content, $headers);
```

#### 402 Payment Required
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return paymentRequired($content, $headers);
``` 

#### 403 Forbidden
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return forbidden($content, $headers);
```

#### 404 Not Found
   
```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return notFound($content, $headers);
```

#### 405 Method Not Allowed

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return methodNotAllowed($content, $headers);
```

#### 406 Not Acceptable

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return notAcceptable($content, $headers);
```

#### 410 Gone

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return gone($content, $headers);
```

#### 413 Payload Too Large

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return payloadTooLarge($content, $headers);
```

#### 422 Unprocessable Entity

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return unprocessableEntity($content, $headers);
```

#### 426 Upgrade Required

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return upgradeRequired($content, $headers);
```

#### 429 Too Many Requests

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return tooManyRequests($content, $headers);
```

### 5xx Server Errors   
    
#### 500 Internal Server Errors

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return internalServerError($content, $headers);
```
    
#### 501 Not Implemented

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return notImplemented($content, $headers);
```

#### 502 Bad Gateway

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return badGateway($content, $headers);
```

#### 503 Service Unavailable

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return serviceUnavailable($content, $headers);
```

#### 504 Gateway Timeout

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return gatewayTimeout($content, $headers);
```

#### 507 Insufficient Storage

```php
    /**
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  array  $headers
     */ 
    return insufficientStorage($content, $headers);
```
    
## Testing

If you wish to run the tests, clone out the repository

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

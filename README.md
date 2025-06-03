laravel-whmcs
======

A simple Laravel interface for interacting with the WHMCS API.

# Installation
Install the package:

```
composer require sermajid/laravel-whmcs
```

Then, add the following **Service Provider** to your `providers` array in your `config/app.php` file:

```php
'providers' => array(
	...
	sermajid\LaravelWhmcs\WhmcsServiceProvider::class,
);
```

From the command-line run:
`php artisan vendor:publish`

# Configuration

Open `config/whmcs.php` and configure the api endpoint and credentials:

```php
return [
    'url'	=>	env('WHMCS_URL', 'http://localhost/includes/api.php'),

    // API USERNAME
    'username'	=>	env('WHMCS_USERNAME','admin_user'),

    // API PASSWORD
    'password'	=> env('WHMCS_PASSWORD','password123'),

    // API RESPONSE TYPE
    'response_type'	=> env('WHMCS_RESPONSE_TYPE','json'),
];
```


# Usage
```php
// app/Http/routes.php

Route::get('/products/{client_id}', function () {
    $products = Whmcs::api('GetClientsProducts', [
        'clientid' => $client_id,
        'limitstart' => 0,
        'limitnum' => 25,
    ]);

    return json_encode($products);
});
```

# Generic API Usage
You can call any WHMCS API action using the `api` helper:

```php
$result = Whmcs::api('GetOrders', ['limitstart' => 0, 'limitnum' => 10]);
```

# Running Tests
```
vendor/bin/phpunit
```

# WHMCS Docs
[http://docs.whmcs.com/API](http://docs.whmcs.com/API)

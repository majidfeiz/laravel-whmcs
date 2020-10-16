laravel-whmcs
======

A simple Laravel interface for interacting with the WHMCS API.

# Installation
To install the package, simply add the following to your Laravel installation's `composer.json` file:

```json
"require": {
	"laravel/framework": "8.*",
	"sermajid/laravel-whmcs": "dev-master"
},
```
Run `composer update` to pull in the files.

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

Route::get('/products/{client_id}', function() {

    $start = 0;
    $limit = 25;

    $products = WHMCS::getClientProducts($client_id, $start, $limit);

    return json_encode($products);
});
```

# WHMCS Docs
[http://docs.whmcs.com/API](http://docs.whmcs.com/API)
